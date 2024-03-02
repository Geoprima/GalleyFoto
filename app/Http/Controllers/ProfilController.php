<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\LikeFoto;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function getdataprofile(Request $request){
        $data = auth()-> user();
        return response()->json([
            'data' => $data
        ],200);
    }
    
    public function getdata(Request $request){
        $explore = Foto::with('likefotos')->withCount(['likefotos', 'comments'])->where('user_id', auth()->id())->paginate(4);
        return response()->json([
            'datapost'  =>$explore,
            'statuscode'    => 200,
            'id'        =>auth()->user()->id,
        ]);
    }

    public function likesfoto(Request $request){
        try {
            $request->validate([
                'idfoto' => 'required'
            ]);

            $existignLike = LikeFoto::where('foto_id', $request->idfoto)->where('user_id', auth()->user()->id)->first(); 
            if(!$existignLike){
                $dataSimpan = [
                    'foto_id'       => $request->idfoto,
                    'user_id'       => auth()->user()->id
                ];
                Likefoto::create($dataSimpan);
            }else{
                Likefoto::where('foto_id', $request->idfoto)->where('user_id', auth()->user()->id)->delete();
            }

            return response()->json('Data berhasil di simpan', 200);
        } catch (\Throwable $th) {
            return response()->json('Somenting went wrong', 500);
        }
    }

    public function update(Request $request){
        $user = auth()->user();
        if ($request->hasFile('picture')) {
            $picture = $request->file('picture');
            $extensi = $picture->getClientOriginalExtension();
            $filename = 'users'. now()->timestamp.'.'. $extensi;
            $picture->move('asset', $filename);
            $user->picture = $filename; 
        }else{
            $picture = $user->picture;
        }

        $user->nama_lengkap = $request->nama_lengkap;
        $user->alamat = $request->alamat;

        $user->save();

        return redirect()->back()->with('succes','Profil berhasil diperbarui');
    }

    public function editpostingan(Request $request, $id){
        
        $foto = Foto::find($id);
        $data_foto = [
            'judul_foto'        => $request->judul_baru,
            'deskripsi_foto'    => $request->deskripsi_baru,
            'album_id'          => $request->album,
        ];  
        $foto->update($data_foto);

        return redirect()->back()->with('success', 'Postinagn Berhasil Di Perbaharui');
    }

    public function hapuspostingan($id){
        $foto =Foto::find($id);
        $foto->delete();

        return redirect()->back()->with('success', 'Postingan Berhasil Di Hapus');
    }
}