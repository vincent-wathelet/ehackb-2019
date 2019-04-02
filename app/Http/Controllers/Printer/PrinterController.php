<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 3/12/2017
 * Time: 10:47
 */

namespace App\Http\Controllers\Printer;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class PrinterController extends Controller
{
    public function index()
    {
        $users = User::query()->orderBy("firstName")->orderBy("lastName")->orderBy("email")->get();
        return view("printer.index", array("users" => $users));
    }

    public function detail($id)
    {
        $user = User::where('id',$id)->first();
        $activities = $user->activities()->orderBy('startDate','asc')->get();
        return view("printer.program")->with('user', $user)->with('activities', $activities);
    }

    public function search(Request $request)
    {
        if (isset($request->q)) {
            $users = User::query()
                ->select('id', 'firstName', 'lastName', 'email', 'confirmed', 'isPresent')
                ->where('firstName', 'LIKE', '%' . $request->q . '%')
                ->orWhere('lastName', 'LIKE', '%' . $request->q . '%')
                ->orWhere('email', 'LIKE', '%' . $request->q . '%')
                ->get();
        } else if (isset($request->id)) {
            $users = User::query()
                ->select('id', 'firstName', 'lastName', 'email', 'confirmed', 'isPresent')
                ->where('id', '=', $request->id)
                ->get();
        } else {
            $users = User::query()
                ->select('id', 'firstName', 'lastName', 'email', 'confirmed', 'isPresent')
                ->get();
        }

        return response()->json($users, 200);
    }

    public function update(Request $request)
    {
        if (isset($request->id) && isset($request->isPresent)) {
            $user = User::find($request->id);
            $user->isPresent = $request->isPresent;
            $user->save();

            $user = User::query()
                ->select('id', 'firstName', 'lastName', 'email', 'confirmed', 'isPresent')
                ->where("id", "=", $request->id)->get();

            return response()->json($user, 200);
        }

        return response()->json(array("status" => "nok"), 200);
    }
}