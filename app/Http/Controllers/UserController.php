<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Trigerlogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            Trigerlogin::create([
                'id_user'=>Auth::user()->id
            ]);
            return redirect('/explore')->with('success', 'Anda Berhasil Login');
        } else {
            return redirect('/login')->with('error', 'Email Atau Password Salah');
        }

    }

    public function register(Request $request){

        $pesan = [
         'email.required'       =>  'Email Tidak Boleh Kosong',
         'email.unique'         =>  'Email Sudah Terpakai',
         'password.required'    =>  'Password Tidak Boleh Kosong',
         'password.min'         =>  'Password Minimal 6 Karakter',
         'username.required'    =>  'Username Tidak Boleh Kosong',
         'username.unique'      =>  'Username Sudah Terpakai'
         ];

         //Validasi
     $request -> validate ([
         'email'                => 'required|unique:users,email',
         'password'             => 'required|min:6',
         'username'             => 'required|unique:users,username'
     ],$pesan);
         //Proses Simpan
         $dataUser = [
             'email'        => $request->email,
             'password'     => bcrypt($request->password),
             'username'     => $request->username,
             ];
             User::create($dataUser);
             return redirect('/register')->with('success', 'Data Berhasil Di Simpan');

     }

     public function logout(Request $request)
        {
            $user =Auth::user();
            if ($user){
                Trigerlogin::where('id_user', $user->id)->delete();
            }
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/');
        }
        public function ubahpassword(Request $request){
            $pesan =[
                'password_lama.required'  => 'password lama harus di isi',
                'password_baru.required'  => 'password baru harus di isi',
                'password_baru.min'  => 'password minimal 6 karakter',
                'confirm_password.required'  => 'konfirmasi password harus di isi',
                'confirm_password.same'  => 'konfirmasi password harus sama dengan password baru'
            ];

            $request->validate ([
                'password_lama'  => 'required',
                'password_baru'  => 'required|min:6',
                'confirm_password'  => 'required | same:password_baru'
            ],$pesan);
            $user = auth()->user();

            if (!Hash::check($request->password_lama, $user->password)){
                return redirect()->back()->with('error', 'password_lama salah');
            } else{
                $user->update([
                    'password'  => Hash::make($request->password_baru)
                ]);
                return redirect()->back()->with('success', 'password berhasil di ubah');
            }
        }

        public function update( Request $request){
            $user = auth()->user();
            if($request->hasFile('picture')){
                $picture  =$request->file('picture');
                $extensi  =$picture->getClientOriginalExtension();
                $filename  ='users'. now()->timestamp .'.'. $extensi;
                $picture->move('assets', $filename);
                $user->picture = $filename;
            } else{
                $picture = $user->picture;
            }

            $user->nama_lengkap =$request->nama_lengkap;
            $user->username  =$request->username;
            $user->alamat  =$request->alamat;

            $user->save();
            return redirect()->back()->with('success', 'Profile Berhasil Di Ubah');
        }


}
