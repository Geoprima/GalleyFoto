<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(Request $request){
        return view('pages.index');
    }

    public function sign_in(Request $request){
        return view('pages.login');
    }

    public function sign_up(Request $request){
        return view('pages.Register');
    }

    public function explore(Request $request){
        return view('pages.explore');
    }
    public function upload(Request $request){
        return view('pages.upload');
    }

    public function profile(Request $request){
        return view('pages.myprofile');
    }
    public function detail(Request $request){
        return view('pages.detail');
    }
    public function userlain(Request $request){
        return view('pages.profileorang');
    }
    public function ubahprofile(Request $request){
        return view('pages.ubahprofile');
    }

}
