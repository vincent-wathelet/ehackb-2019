<?php

namespace App\Http\Controllers;

use App\Activity;
use App\ActivityGroup;
use App\Game;
use App\Useractivities;
use App\Http\Controllers\Controller;
use App\Option;
use App\Team;
use App\User;
use App\Exports\arraytoboject;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;

class AdminController extends Controller
{
    public function index()
    {
        

        return view('admin.index');
    }

    public function manageGame()
    {
        $games = Game::all();
        return view('admin.manageGame')->with('games',$games);
    }

    public function editGame($id)
    {
        $game = Game::find( $id)->first();
        return view('admin.editGame')->with('game',$game);
    }

    public function gameregistratie()
    {
        $games = Game::all();
        return view('admin.registratie')->with('games',$games);
    }
    public function activityregistratie()
    {
        $activity = ActivityGroup::all();
        return view('admin.activityregistratie')->with('activitygroup',$activity);
    }
    public function activityregList($id)
    {
        $activity = Activity::all()->where('id','=',$id)->first();
        $inschrijvingen = Useractivities::all()->where('activityID',"=",$id);
        return view('admin.activityregList')->with('activity',$activity)->with('inschrijving',$inschrijvingen);
    }
    public function usersaldo()
    {
        $users = User::all();
        return view('admin.usersaldo')->with('users',$users);
    }
    public function excelsaldo()
    {
        $users = User::all();
        $customarray[] = array('naam','email','type','te betalen');
        foreach($users as $user)
        {
            $saldo = 0.00;
            $type =  "niet-competitieve";
            if(isset($user->game()->first()->typeGamer)){
            if($user->game()->first()->typeGamer == 'competitieve')
            {
                $saldo += 5;
                $type = "competitieve";
            }}
            foreach($user->options()->get() as $option)
            {
                $saldo += $option->price;
            }
            $naam = $user->firstName ." " . $user->lastName;
            $customer_array[] = array(
                'naam'  => $naam,
                'email'   => $user->email,
                'type'   => $type,
                'te betalen'  => $saldo
               );
        }
        $result = array_merge ($customarray , $customer_array);
        $export = new arraytoboject($result);
        return Excel::download($export,'bezoekers.xlsx');
        
    }
    public function excelgame()
    {
        $games = Game::all();
        $result[] = array('game inschrijvingen');
        $result[] = array('');
        foreach ($games as $item)
        {
            $result[] = array($item->name);
            $result[] = array('');
            $result[] = array("name","email","teamname");
            foreach ($item->game()->get()->sortBy('teamname') as $enrty)
            {  
                $name;
                $email;
                $teamname;
                if(isset($enrty->user()->first()->firstName) && isset($enrty->user()->first()->lastName))
                {
                    if(isset($enrty->user()->first()->email))
                    {
                        $name = $enrty->user()->first()->firstName . " " . $enrty->user()->first()->lastName;
                        $result[] = array($name,$enrty->user()->first()->email,$enrty->teamname);

                    }
                }
            }
            $result[] = array('');

        }
        $export = new arraytoboject($result);
        return Excel::download($export,'gaming.xlsx');
    }
    public function excelactivity()
    {
        $activitygroup = ActivityGroup::all();
        $result[] = array('inschrijvingen workshops en sprekers');
        $result[] = array('');
        $result[] = array('');

        foreach ($activitygroup as $item)
        {
            if($item->id != 4)
            {
                $result[] = array($item->name);
                $result[] = array('');
                foreach ($item->activity()->get() as $activity)
                {
                    $result[] = array($activity->name);
                    $result[] = array('');
                    $inschrijving = Useractivities::all()->where('activityID',"=",$activity->id);

                    $result[] = array('naam','email');
                    foreach ($inschrijving as $enrty)
                    {
                        if(isset($enrty->users()->first()->firstName) && isset($enrty->users()->first()->lastName))
                        {
                            if(isset($enrty->users()->first()->email))
                            {

                                $name = $enrty->users()->first()->firstName . " " . $enrty->users()->first()->lastName;
                                $result[] = array($name,$enrty->users()->first()->email);

                            }
                        }
                        
                    }
                    $result[] = array('');
                    $result[] = array('');

                }
            }
        }

        $export = new arraytoboject($result);
        return Excel::download($export,'activiteiten.xlsx');
    }
}
