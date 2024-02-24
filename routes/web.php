<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PinController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ExploreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//view sebelum login

Route::middleware('guest')->group(function(){

    Route::get('/', [ViewController::class, 'index'])->name('index');
    Route::get('/login', [ViewController::class, 'sign_in']);
    Route::get('/register', [ViewController::class, 'sign_up']);

    //procces
    Route::post('/login', [UserController::class, 'login']);
    Route::post('/register', [UserController::class, 'register']);

});


Route::middleware('auth')->group(function(){

    //Tampilan setelah login
    Route::get('/explore', [ViewController::class, 'explore']);
    Route::get('/getDataExplore', [ExploreController::class, 'getdata']);
    Route::post('/likefotos', [ExploreController::class, 'likesfoto']);


    Route::get('/explore-detail/{id}', [ViewController::class, 'detail']);
    Route::get('/explore-detail/{id}/getdatadetail', [ExploreController::class, 'getdatadetail']);
    Route::get('/explore-detail/getComment/{id}', [ExploreController::class, 'ambildatakomentar']);
    Route::post('/exploe-detail/kirimkomentar', [ExploreController::class, 'kirimkomentar']);

    Route::get('/other-pin/{id}', [ViewController::class, 'userlain']);
    Route::get('/other-pin/getDataPin/{id}', [PinController::class, 'getdatapin']);
    Route::get('/getdataotherpinexplore/', [PinController::class, 'getdata']);
    Route::get('/likefotos', [PinController::class, 'likefoto']);


    Route::get('/upload', [ViewController::class, 'upload']);
    Route::post('/upload/store', [UploadController::class, 'storeFoto']);

    Route::get('/profile', [ViewController::class, 'profile']);
    Route::get('/logout', [UserController::class, 'logout']);

    Route::get('/ubahprofile', [ViewController::class, 'ubahprofile']);


 
});











// Route::get('/detail', function () {
//     return view('pages.explore-detail');
// });

// Route::get('profile', function () {
//     return view('pages.profil');
// });
// Route::get('pin', function () {
//     return view('pages.pin');
// });
// Route::get('other', function () {
//     return view('pages.other-pin');
// });
// Route::get('my', function () {
//     return view('pages.my-pin');
// });
// Route::get('follow', function () {
//     return view('pages.following');
// });
// Route::get('follower', function () {
//     return view('pages.follower');
// });
// Route::get('password', function () {
//     return view('pages.changepassword');
// });
