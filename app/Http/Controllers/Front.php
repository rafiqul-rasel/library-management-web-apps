<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Front extends Controller
{
    protected function index()
    {
        return view('front.index');
    }
    protected function admin(){
      return view('front.login');

    }
    protected function old(){
        return view('welcome');
    }
    protected function forgotpassword(){
        return view('front.forget');
    }
    protected function home(){
        return view('backend.index');
    }
    protected function test(){
        return view('backend.report.all_member');
    }

}
