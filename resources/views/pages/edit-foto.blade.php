@extends('include.master')
@section ('content')
    <section class="mt-32">
        <div class="items-center max-w-screen-md mx-auto ">
            <h3 class="text-5xl text-center font-hurricane">Gallery</h3>
        </div>
    </section>
    <form action="/edit-postingan/{{$foto->id}}" method="POST" enctype="multipart/form-data">
        @csrf
    <section class="mt-10">
        <div class="max-w-screen-md mx-auto flex justify-center">
            
                <div class="w-2/5  max-[480px]:w-full px-2">
                    <div class="flex flex-col flex-wrap">
                        <h3>Judul</h3>
                        <input type="text" name="judul_baru" id="" class="py-1 rounded-full border-slate-500" value="{{$foto->judul_foto}}">
                        <h3 class="mt-4">Deskripsi</h3>
                        <input type="text" name="deskripsi_baru" id="" class="py-1 rounded-full border-slate-500" value="{{$foto->deskripsi_foto}}">
                            
                            <h3>Album</h3>
                            <select name="album" id="">
                                @foreach ($albums as $album)
                                    <option value="{{$album->id}}">{{$album->nama_album}}</option>
                                @endforeach
                            <input type="hidden" name="" id="" class="py-1 rounded-full border-slate-500">
                        <div class="flex flex-row justify-between">
                            <div></div>
                            <button class="px-6 py-1 mt-4 text-white rounded-md bg-blue-500">upload</button>
                        </div>


                           
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
    @endsection