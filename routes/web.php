<?php

use App\Models\Contact;
use App\Models\Discover;
use App\Models\Nav;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Title;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {

    $nav = Nav::all();
    $service = Service::all();
    $discover = Discover::all();
    $testimonial = Testimonial::all();
    $team = Team::all();
    $contact = Contact::all();
    $title = Title::all();
    return view('pages.home', compact('nav','service','discover','testimonial','team','contact','title'));
});

Route::get('/service', function () {
    $nav = Nav::all();
    return view('pages.contact', compact('nav'));
});

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
