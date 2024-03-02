<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user = auth()->user();
        return view('pages.explore', compact ('user'));
    }
    public function upload(Request $request){
        $user = auth()->user();
        $albums = Album::where('user_id', Auth::user()->id)->get();
        return view('pages.upload', compact ('albums','user'));
    }

    public function profile(Request $request){
        $user = auth()->user();
        return view('pages.myprofile', compact ('user'));
    }
    public function detail(Request $request){
        $user = auth()->user();
        return view('pages.detail', compact ('user'));
    }
    public function userlain(Request $request){
        $user = auth()->user();
        return view('pages.profileorang', compact ('user'));
    }
    public function ubahprofile(Request $request){
        $user = auth()->user();
        return view('pages.ubahprofile', compact ('user'));
    }
    public function ubahpassword(Request $request){
        $user = auth()->user();
        return view('pages.ubahpassword', compact ('user'));
    }
    public function album(Request $request){
        $user = auth()->user();
        $albums = Album::where('user_id', Auth::user()->id)->get();
        return view ('pages.album', compact('user', 'albums'));
    }
    public function editfoto(Request $request, $id){
        $user = auth()->user();
        $albums =Album::where('user_id', Auth::user()->id)->get();
        $foto = Foto::find($id);
        return view('pages.edit-foto', compact('user', 'albums', 'foto'));
    }
}
 