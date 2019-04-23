<?php

namespace App\Http\Controllers;

use App\Game;
use App\Http\Requests\RegisterTeamRequest;
use App\Http\Requests\RegisterCasualRequest;
use App\Http\Requests\RegisterPublicRequest;
use App\Http\Requests\RegisterMailRequest;
use App\PendingInvite;
use Illuminate\Http\Request;
use App\User;
use App\Team;
use App\Activity;
use App\Option;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use GuzzleHttp\Client;
use Auth;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('ehackb.index');
    }

    public function show()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $allActivities = Activity::orderBy('startDate','asc')->get();
            $allOptions = Option::all();

            $activities = array();
            $options = array();



            if (!empty($user->activities())) {
                $activities = $user->activities()->orderBy('startDate','asc')->get();
            }

            if (!empty($user->options())) {
                $options = $user->options()->get();

            }
            if ($user->hasTeam) {
                $team = $user->team()->get()->first();
                $game = $team->game()->get()->first();

                if ($game->isSingleplayer) {
                    return view('registration.show')->with('user', $user)->with('activities', $activities)->with('options', $options)->with('team', $team)->with('game', $game)->with('allActivities', $allActivities)->with('allOptions', $allOptions);
                } else {
                    $teamUsers = $team->users()->get();
                    $members = array();
                    foreach ($teamUsers as $teamUser) {
                        array_push($members, $teamUser);
                    }
                    return view('registration.show')->with('user', $user)->with('activities', $activities)->with('options', $options)->with('team', $team)->with('game', $game)->with('members', $members)->with('allActivities', $allActivities)->with('allOptions', $allOptions);
                }
            } else {
                return view('registration.show')->with('user', $user)->with('activities', $activities)->with('options', $options)->with('allActivities', $allActivities)->with('allOptions', $allOptions);
            }
        } else {
            // Make unauthorized page
            return redirect('/login');
        }
    }

    public function new(){
        $games = Game::orderBy('name')->where('maxPlayers', '>', 1)->get();
        $teams;
        $collection2 = Team::where('gameID', $games[0]->id)->where('isPublic', '1')->get();
        foreach ($collection2 as $t) {
            if (($t->game->maxPlayers - $t->invites()->count() - $t->users()->count()) > 0) {
                $teams[] = $t;
            }
        }

        $activities = array();
        $collection = Activity::orderBy('startDate','asc')->get();
        foreach ($collection as $ac) {
            if ($ac->users()->count() < $ac->maxUsers) {
                $activities[] = $ac;
            }
        }

        $talks = array();
        $workshops = array();

        foreach ($collection as $activity) {
            if ($activity->activityGroupID == 1) {
                array_push($talks, $activity);
            } else {
                array_push($workshops, $activity);
            }
        }

        $view = view('registration.new')->with('games', $games);
        if (!empty($teams)) {
            $view->with('teams', collect($teams));
        }

        $view->with('talks', $talks)->with('workshops', $workshops);

        return $view->with('options', Option::all());
    }

    public function create()
    {
        $activities = array();
        $collection = Activity::orderBy('startDate','asc')->get();
        foreach ($collection as $ac) {
          if ($ac->users()->count() < $ac->maxUsers) {
            $activities[] = $ac;
          }
        }

        $talks = array();
        $workshops = array();

        foreach ($collection as $activity) {
          if ($activity->activityGroupID == 1) {
            array_push($talks, $activity);
          } else {
            array_push($workshops, $activity);
          }
        }

        return view('registration.create')->with('talks', $talks)->with('workshops', $workshops)->with('options', Option::all());
    }

    public function createCasual()
    {
        $activities = array();
        $collection = Activity::orderBy('startDate','asc')->get();
        foreach ($collection as $ac) {
          if ($ac->users()->count() < $ac->maxUsers) {
            $activities[] = $ac;
          }
        }

        $talks = array();
        $workshops = array();

        foreach ($collection as $activity) {
          if ($activity->activityGroupID == 1) {
            array_push($talks, $activity);
          } else {
            array_push($workshops, $activity);
          }
        }

        return view('registration.create-casual')->with('talks', $talks)->with('workshops', $workshops)->with('options', Option::all());
    }

    public function createPublic()
    {
        $games = Game::orderBy('name')->where('maxPlayers', '>', 1)->get();
        $teams;
        $collection2 = Team::where('gameID', $games[0]->id)->where('isPublic', '1')->get();
        foreach ($collection2 as $t) {
            if (($t->game->maxPlayers - $t->invites()->count() - $t->users()->count()) > 0) {
                $teams[] = $t;
            }
        }

        $activities = array();
        $collection = Activity::orderBy('startDate','asc')->get();
        foreach ($collection as $ac) {
          if ($ac->users()->count() < $ac->maxUsers) {
            $activities[] = $ac;
          }
        }

        $talks = array();
        $workshops = array();

        foreach ($collection as $activity) {
          if ($activity->activityGroupID == 1) {
            array_push($talks, $activity);
          } else {
            array_push($workshops, $activity);
          }
        }

        $view = view('registration.create-public')->with('games', $games);
        if (!empty($teams)) {
            $view->with('teams', collect($teams));
        }

        $view->with('talks', $talks)->with('workshops', $workshops);

        return $view->with('options', Option::all());
    }

    public function editActivities(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $user->activities()->sync($request->input('activities') === null ? [] : $request->input('activities'));
        } else {
            return redirect("/login");
        }
        return redirect("/show");
    }

    public function editOptions(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $user->options()->sync($request->input('options') === null ? [] : $request->input('options'));
        } else {
            return redirect("/login");
        }
        return redirect("/show");
    }

    //poging tot games beschikbaar maken na inloggen
/*    public function storeTeamExistingUser(RegisterTeamRequest $request)
{
    if (Auth::check()) {
        $user = Auth::user();

        $team = new Team();
        $team->leaderID = $user->id;
        $team->name = $request->input('teamname');
        $team->gameID = $request->input('gameid');

        $mailarr = array();
        if($request->has('teammembers')){
            $mailarr = $request->input('teammembers');
        }

        $gameTeamSize = Game::where('id', $team->gameID)->first()->maxPlayers;

        //remove empty fields
        $mailarr = array_filter($mailarr);

        if ($gameTeamSize == count($mailarr)) {
            // non public team
            $team->isPublic = false;
        } else {
            // public team
            $team->isPublic = true;
        }
        $savedTeam = $team->save();
        if ($savedTeam) {
            $pendingInvites = array();

            for ($i = 0; $i < count($mailarr); $i++) {
                $membermail = $mailarr[$i];
                $inv = new PendingInvite();
                $inv->email = $membermail;
                $inv->teamID = $team->id;
                $inv->token = str_replace('/', '_', Str::random(60));
                array_push($pendingInvites, $inv);
            }
            foreach ($pendingInvites as $pendingInvite) {
                if ($pendingInvite->save()) {
                    $this->mailInvite($pendingInvite);
                }
            }
            $team->users()->attach($user);
            $this->mailConfirm($user);
        } else {
            $team->delete();
            $user->delete();
            return redirect()->back()->with('err', 'Kon het team niet opslaan.');
        }

        return redirect("/show");

    } else {
        return redirect("/login");
    }
}*/

    public function storeTeam(RegisterTeamRequest $request)
    {
        $user = new User();

        $user->email = $request->input('email');
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->password = Hash::make($request->input('password'));
        $user->reminderMail = $request->input('reminderemail');
        $user->confirmationToken = str_replace('/', '_', Str::random(60));
        $savedUser = $user->save(); // create user in db

        if ($request->has('activities')) {
            $activities = $request->input('activities');
            foreach ($activities as $activity) {
                $ac = Activity::find($activity);
                if ($ac->users()->count() >= $ac->maxUsers) {
                    $error = 'Maximum aantal inschrijvingen voor activiteit bereikt: ' . $ac->name;
                    $user->delete();
                    return redirect()->back()->with('err', $error);
                }
            }
            foreach ($activities as $activity) {
                $ac = Activity::find($activity);
                if (!is_null($ac)) {
                    $ac->users()->attach($user);
                }
            }
        }

        if ($request->has('options')) {
            $options = $request->input('options');
            foreach ($options as $option) {
                $op = Option::find($option);
                if (!is_null($op)) {
                    $op->users()->attach($user);
                }
            }
        }

        if ($savedUser) {
            $team = new Team();
            $team->leaderID = $user->id;
            $team->name = $request->input('teamname');
            $team->gameID = $request->input('gameid');

            $mailarr = array();
            if($request->has('teammembers')){
                $mailarr = $request->input('teammembers');
            }

            $gameTeamSize = Game::where('id', $team->gameID)->first()->maxPlayers;

            //remove empty fields
            $mailarr = array_filter($mailarr);

            if ($gameTeamSize == count($mailarr)) {
                // non public team
                $team->isPublic = false;
            } else {
                // public team
                $team->isPublic = true;
            }
            $savedTeam = $team->save();
            if ($savedTeam) {
                $pendingInvites = array();

                for ($i = 0; $i < count($mailarr); $i++) {
                    $membermail = $mailarr[$i];
                    $inv = new PendingInvite();
                    $inv->email = $membermail;
                    $inv->teamID = $team->id;
                    $inv->token = str_replace('/', '_', Str::random(60));
                    array_push($pendingInvites, $inv);
                }
                foreach ($pendingInvites as $pendingInvite) {
                    if ($pendingInvite->save()) {
                        $this->mailInvite($pendingInvite);
                    }
                }
                $team->users()->attach($user);
                $this->mailConfirm($user);
            } else {
                $team->delete();
                $user->delete();
                return redirect()->back()->with('err', 'Kon het team niet opslaan.');
            }
        } else {
            return redirect()->back()->with('err', 'Kon de gebruiker niet opslaan.');
        }

        $msg = 'Registratie gelukt! Er is een bevestigingsmail gestuurd naar je mailbox!';
        return redirect("/login")->with('msg', $msg);
    }

    public function update(Request $request)
    {
    }

    public function ajaxTeams($gameid)
    {
        $teams;
        $collection2 = Team::where('gameID', $gameid)->where('isPublic', '1')->get();
        foreach ($collection2 as $t) {
            if (($t->game->maxPlayers - $t->invites()->count() - $t->users()->count()) > 0) {
                $teams[] = $t;
            }
        }
        $view = view('ajax.team');
        if (!empty($teams)) {
            $view->with('teams', $teams);
        }
        return $view;
    }

    public function userConfirmation($token){
        $user = User::where('confirmationToken',$token)->first();
        if(isset($user) && $user->confirmed == false){
            $user->confirmed = true;
            $user->save();
            return view('registration.confirmation')->with('succ','Je account is bevestigd. Veel plezier op EhackB!');
        }
        else if(isset($user) && $user->confirmed == true){
          return view('registration.confirmation')->with('succ','Je account werd al bevestigd.');
        }
        else{
            return view('registration.confirmation')->with('err','We konden je account niet bevestigen met deze token.');
        }
    }

    public function createMailInvite(Request $request, $token)
    {
        $invite = PendingInvite::where('token', $token)->first();

        $activities = array();
        $collection = Activity::orderBy('name','asc')->get();
        foreach ($collection as $ac) {
          if ($ac->users()->count() < $ac->maxUsers) {
            $activities[] = $ac;
          }
        }

        $talks = array();
        $workshops = array();

        foreach ($collection as $activity) {
          if ($activity->activityGroupID == 1) {
            array_push($talks, $activity);
          } else {
            array_push($workshops, $activity);
          }
        }

        if (!empty($invite)) {
            return view('registration.create-mail')->with('talks', $talks)->with('workshops', $workshops)->with('invite', $invite)->with('team', $invite->team)->with('options', Option::all());
        } else {
            return view('registration.mail-error')->with('talks', $talks)->with('workshops', $workshops)->with('options', Option::all());
        }
    }

    public function storeCasual(RegisterCasualRequest $request)
    {
        //creating user
        $user = new User();
        $user->email = $request->input('email');
        $user->reminderMail = $request->input('reminderemail');
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->password = Hash::make($request->input('password'));
        $user->confirmationToken = str_replace('/', '_', Str::random(60));
        $savedUser = $user->save(); // create user

        if (!$savedUser) {
            return redirect()->back()->with('err', 'Kon de gebruiker niet opslaan.');
        }

        if ($request->has('activities')) {
            $activities = $request->input('activities');
            foreach ($activities as $activity) {
                $ac = Activity::find($activity);
                if ($ac->users()->count() >= $ac->maxUsers) {
                    $error = 'Maximum aantal personen voor activiteit bereikt: ' . $ac->name;
                    $user->delete();
                    return redirect()->back()->with('err', $error);
                }
            }
            foreach ($activities as $activity) {
                $ac = Activity::find($activity);
                if (!is_null($ac)) {
                    $ac->users()->attach($user);
                }
            }
        }

        if($request->has('options')) {
            $options = $request->input('options');
            foreach ($options as $option) {
                $op = Option::find($option);
                if (!is_null($op)) {
                    $op->users()->attach($user);
                }
            }
        }

        //sendmail
        $this->mailConfirm($user);
        $msg = 'Registratie gelukt! Er is een bevestigingsmail gestuurd naar je mailbox!';
        return redirect("/login")->with('msg', $msg);
    }

    public function storePublicTeam(RegisterPublicRequest $request)
    {
        //creating user
        $user = new User();
        $user->email = $request->input('email');
        $user->reminderMail = $request->input('reminderemail');
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->password = Hash::make($request->input('password'));
        $user->confirmationToken = str_replace('/', '_', Str::random(60));
        $savedUser = $user->save(); // create user

        if (!$savedUser) {
            return redirect()->back()->with('err', 'Kon de gebruiker niet opslaan.');
        }

        if ($request->has('team')) {
            $team = Team::find($request->input('team'));
            if (!is_null($team)) {
                if ($team->users()->count() < (($team->game->maxPlayers) - $team->invites()->count())) {
                    $team->users()->attach($user);
                    if ($team->users()->count() == $team->game->maxPlayers) {
                        $team->isPublic = false;
                    }
                } else {
                    $user->delete();
                    return redirect()->back()->with('err', 'Dit team is vol.');
                }
            } else {
                $user->delete();
                return redirect()->back()->with('err', 'Kon geen team vinden.');
            }
        }

        if ($request->has('activities')) {
            $activities = $request->input('activities');
            foreach ($activities as $activity) {
                $ac = Activity::find($activity);
                if ($ac->users()->count() >= $ac->maxUsers) {
                    $error = 'Maximum aantal personen voor activiteit bereikt: ' . $ac->name;
                    $user->delete();
                    return redirect()->back()->with('err', $error);
                }
            }
            foreach ($activities as $activity) {
                $ac = Activity::find($activity);
                if (!is_null($ac)) {
                    $ac->users()->attach($user);
                }
            }
        }

        if ($request->has('options')) {
            $options = $request->input('options');
            foreach ($options as $option) {
                $op = Option::find($option);
                if (!is_null($op)) {
                    $op->users()->attach($user);
                }
            }
        }

        //sendmail
        $this->mailConfirm($user);

        $msg = 'Registratie gelukt! Er is een bevestigingsmail gestuurd naar je mailbox!';
        return redirect("/login")->with('msg', $msg);
    }

    public function storeMailInvite(RegisterMailRequest $request)
    {
        //dd($request);
        $token = $request->input('token');
        $invite = PendingInvite::where('token', $token)->first();

        //creating user
        $user = new User();
        $user->email = $invite->email;
        $user->reminderMail = $request->input('reminderemail');
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->password = Hash::make($request->input('password'));
        $user->confirmationToken = str_replace('/', '_', Str::random(60));
        $savedUser = $user->save(); // create user


        if (!$savedUser) {
            return redirect()->back()->with('err', 'Kon de gebruiker niet opslaan.');
        }

        if ($request->has('activities')) {
            $activities = $request->input('activities');
            foreach ($activities as $activity) {
                $ac = Activity::find($activity);
                if ($ac->users()->count() >= $ac->maxUsers) {
                    $error = 'Maximum aantal personen voor activiteit bereikt   : ' . $ac->name;
                    $user->delete();
                    return redirect()->back()->with('err', $error);
                }
            }
            foreach ($activities as $activity) {
                $ac = Activity::find($activity);
                if (!is_null($ac)) {
                    $ac->users()->attach($user);
                }
            }
        }

        if ($request->has('options')) {
            $options = $request->input('options');
            foreach ($options as $option) {
                $op = Option::find($option);
                if (!is_null($op)) {
                    $op->users()->attach($user);
                }
            }
        }

        $team = Team::where('id', $invite->teamID)->first();
        $team->users()->attach($user);

        $invite->delete();

        //sendmail
        $this->mailConfirm($user);

        $msg = 'Registratie gelukt! Er is een bevestigingsmail gestuurd naar je mailbox!';
        return redirect("/login")->with('msg', $msg);
    }

    private function mailInvite(PendingInvite $invite)
    {
        $team = $invite->team()->first();
        $game = Game::where('id', $team->gameID)->first();
        $leader = User::where('id', $team->leaderID)->first();

        $title = "Welkom bij EhackB!";
        $content = "Je bent uitgenodigd voor een {$game->name} team door {$leader->firstName} {$leader->lastName}<br>
                    Wil je meedoen? Klik op de link hieronder!";

        /*
        $content2 = "Hi, <br><br>
            Join me 16-17 december in the fight for the best {$game->name} team at EhackB 2016.
            Click the link below to join our team {$team->name}<br><br>
            Regards,<br><br>{$leader->firstName} {$leader->lastName}<br>";
        */

        $token = $invite->token;
        Mail::send(['html'=>'mail.invite'],['title' => $title, 'content' => $content, 'team' => $team->name, 'token'=>$token], function($message) use ($invite){
            $message->sender('no-reply@ehackb.be', $name = 'EhackB crew');
            $message->subject('Je bent uitgenodigd voor een team op EhackB!');
            $message->replyTo('ehackb@ehackb.be', $name = null);
            $message->to($invite->email, $name = null);
        });
    }

    /*
     * Resend the pending mail invites
     */
    private function resendPendingInvites(){
        $invites = PendingInvite::all();
        foreach($invites as $invite){
            $this->mailInvite($invite);
        }
    }

    /*
     * Resend the mails to confirm the user
     */
    private function resendMailConfirms(){
        $confirms = User::all()->where('confirmed', 0)->get();
        foreach($confirms as $confirm){
            $this->mailConfirm($confirm);
        }
    }

    private function mailConfirm(User $user)
    {
        $title = "Welkom bij EhackB!";
        $content = "Bevestig je e-mailadres!";
        Mail::send('mail.confirmation',  ['title' => $title, 'content' => $content,'user' => $user,'token' => $user->confirmationToken], function($message) use ($user){
            $message->sender('no-reply@ehackb.be', $name = 'EhackB crew');
            $message->subject('Welkom bij EhackB!');
            $message->to($user->email, $name = null);
        });

    }

    private function getAvailableActivities(){
        $activities=array();
        $collection = Activity::orderBy('name','asc')->get();
        foreach ($collection as $ac) {
            if ($ac->users()->count() < $ac->maxUsers) {
                $activities[] = $ac;
            }
        }
        return collect($activities);
    }

}
