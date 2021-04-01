<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Mail\ContactForm;
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
    return view('home');
})->name('home');

Route::get('services', function () {
    return view('services');
})->name('services');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

// Route::post('/contact', function (Request $request) {
//     $contact = $request->validate([
//       'name' => 'required',
//       'email' => 'required|email',
//       'phone' => 'required',
//       'message' => 'required',
//     ]);
//     dd('1');
//     Mail::to(request('email'))->send(new ContactForm($contact));
//
//     return back()->with('success_message', 'We received your message successfully.');
//
// });


Route::get('about', function () {
    return view('about');
})->name('about');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
