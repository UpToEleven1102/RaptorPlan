<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Major as Major;
use DB;

class ContentController extends Controller
{
    function home(){
        return view('landing');
    }

    function dashboard(){
        return view('app.dashboard');
    }

    function raptorplan(){
        return view('./dashboard/index');
    }

    function getMajors(Major $majors){
        return json_encode($majors->getAll());
    }

    function test(){
        $users = DB::select('select * from users');
        var_dump($users);
    }
}
