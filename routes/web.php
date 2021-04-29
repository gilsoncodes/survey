<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Mail\ContactForm;
use App\Mail\ContactMarkdown;
use App\Mail\AppointmentMarkdown;
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

Route::get('appointment', function () {
  $appointment = null;
  if (request()->has('a') && request()->has('r')) {
      $appointment = App\Models\Appointment::where('id',request('a'))->where('reference',request('r'))->first();
  }
  return view('cancel-appointment',[
    'appointment' => $appointment
  ]);

})->name('cancel');


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


// visualize the email sent by the contact form
Route::get('/mailable', function () {
  $contact = [
    'name' => 'gilson antonio dos Reis',
    'email' => 'test@test.com',
    'phone' => '9999999999',
    'message' => 'test message'
  ];
    return new App\Mail\ContactMarkdown($contact);
});

Route::get('/appointmail', function () {
  $timeMail = '08:15 PM';
  $dateMail = 'Wed April 28, 2021';
  $appointment = [
    'name' => 'gilson antonio dos Reis',
    'email' => 'test@test.com',
    'phone' => '9999999999',
    'message' => 'test message',
    'selectedMeeting' => 1,
    'address' => '116 Nichols Ave, Watertown - MA',
    'business' => 'GAR Solutions',
    'reference' => 'aassddffgghhjjkkll;;QQWWEERRTTYYUUIII',
    'id' => 5
  ];


    return new App\Mail\AppointmentMarkdown($appointment, $timeMail, $dateMail );
});
