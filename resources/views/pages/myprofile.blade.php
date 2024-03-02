@extends('include.master')
@push('cssjsexternal')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@endpush
@section('content')

    <section class="mt-32">
        <div class="items-center max-w-screen-md mx-auto ">
            <h3 class="text-5xl text-center font-hurricane">Gallery</h3>
        </div>
    </section>
    <section>
        <div>
        </div>
        <div class="flex flex-col items-center max-w-screen-md px-2 mx-auto mt-4">
            <div>
                <img src="/assets/gambar1.jpg" alt="" class="w-24 h-24 rounded-full" id="fotoprofile"> 
            </div>
            <h3 class="text-xl font-semibold" id="nama">
                Geo
            </h3>
            <a href="/ubahprofile"><button class="px-6 py-1 mt-4 text-white rounded-md bg-blue-500">Edit Profile</button>
        </a>
        </div>
    </section>
    <section class="mt-10">
        <div class="max-w-screen-md mx-auto">
            <div class="flex flex-wrap items-center flex-container" id="dataprofile">
                
            </div>
        </div>
    </section>

@endsection
@push('footerjsexternal')
    <script src="/javascript/profil.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
@endpush

