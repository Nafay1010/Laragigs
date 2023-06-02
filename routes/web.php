<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ListingController::class, 'index']);

Route::get('/Listing/create', [ListingController::class, 'create'])->middleware('auth');

Route::post('/Listing', [ListingController::class, 'store'])->middleware('auth');

Route::get('/Listing/{listing}/edit',[ListingController::class, 'edit'])->middleware('auth');

Route::put('/Listing/{listing}', [ListingController::class, 'update'])->middleware('auth');

Route::delete('/Listing/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

Route::get('/Listing/manage', [ListingController::class, 'manage'])->middleware('auth');

Route::get('/Listing/{listing}', [ListingController::class, 'show']);

Route::get('/register', [UserController::class, 'create'])->middleware('guest');

Route::post('/users', [UserController::class, 'store']);

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::post('/users', [UserController::class, 'store']);

Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');


// Route::get('/login', [UserController::class, 'create']);


// Route::get('/', function () {
//     return view('listings', [
//         'listings' => Listing::all()
//     ]);
// });

// Route::get('/Listing/{listing}', function (Listing $listing) {
//     return view('listing', [
//         'listing' => $listing
//     ]);
// });


// Route::get('/test', function(){
//     return response('YOOOOOOOOOOO!')
//     ->header('Content-Type', 'text/plain')
//     ->header('foo', 'yea');
// });


// Route::get('/search', function(Request $request) {
//     // $name = $request->query('name');
//     // $city = $request->query('city');
    
//     // return $name . ' ' . $city;
//     dd($request);
// });
