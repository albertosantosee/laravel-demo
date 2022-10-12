<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function getIndex() {
    
        $users = \App\Models\User::all()->toArray();
        return view('welcome')->with( array(
            'users' => $users
        ));
    }

    function getAdd() {
        $success = false;
        return view('add')->with( array(
            'success' => false
        ));
    }

    function postAdd() {
        $newUser = new \App\Models\User();
        $newUser->name = request('name');
        $newUser->save();

        return view('add')->with( array(
            'success' => true
        ));
    }

    function delete() {
        \App\Models\User::truncate();
        return redirect('/');
    }

}
