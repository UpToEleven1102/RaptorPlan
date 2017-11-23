<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContentController extends Controller
{
    function home(){
        return view('landing');
    }

    function dashboard(){
        return view('app\dashboard');
    }

    function test(){
        $users = DB::select('select * from users');
        var_dump($users);
    }
}
