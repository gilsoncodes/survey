<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Mail\ContactForm;
use App\Mail\ContactMarkdown;
use App\Mail\AppointmentMarkdown;

require_once __DIR__ . '/jetstream.php';
require_once __DIR__ . '/fortify.php';
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|'.app()->getLocale().'
*/

// Route::get('/', function(){
//
//   if (session('locale')) {
//
//     $url_path = '/' . session('locale');
//   } else {
//     //dd('NO');
//     $url_path = '/en';
//   }
//   return redirect($url_path);
//
// });

 // Route::redirect('/', '/en');
// Route::redirect('/dashboard', '/'.app()->getLocale().'/dashboard');
// Route::get('/dashboard', function () {
//   dd(redirect()->route('dashboard'));
//     return redirect()->route('dashboard');
// });

Route::group(['prefix' => '{lang}'], function (){

  Route::get('/', function () {
      return view('home');
  })->name('home');

  Route::get('services', function () {
      return view('services');
  })->name('services');

  Route::get('contact', function () {
      return view('contact');
  })->name('contact');

  // Route::get('appointment', function () {
  //     return view('appointment');
  //   // $appointment = null;
  //   // if (request()->has('a') && request()->has('r')) {
  //   //     $appointment = App\Models\Appointment::where('id',request('a'))->where('reference',request('r'))->first();
  //   // }
  //   // return view('livewire.cancel-appointment',[
  //   //   'appointment' => $appointment
  //   // ]);
  //
  // })->name('cancel');
  // // Route::get('about', function () {
  // //     return view('about');
  // // })->name('about');
  //
  //
  // Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
  //     return view('dashboard');
  // })->name('dashboard');
  //
  // Route::middleware(['auth:sanctum', 'verified'])->get('/subscribe', function () {
  //     return view('subscribe',[
  //        'intent' => auth()->user()->createSetupIntent()
  //     ]);
  // })->name('subscribe');
  //
  // Route::middleware(['auth:sanctum', 'verified'])->post('/subscribe', function (Request $request) {
  //   //dd($request->all());
  //   auth()->user()->newSubscription('hostingMonthly', $request->plan)->create($request->paymentMethod);
  //     return redirect('/dashboard');
  // })->name('subscribe.post');
  //
  // // visualize the email sent by the contact form
  // Route::get('/mailable', function () {
  //   $contact = [
  //     'name' => 'gilson antonio dos Reis',
  //     'email' => 'test@test.com',
  //     'phone' => '9999999999',
  //     'message' => 'test message'
  //   ];
  //     return new App\Mail\ContactMarkdown($contact);
  // });
  //
  // Route::get('/appointmail', function () {
  //   $timeMail = '08:15 PM';
  //   $dateMail = 'Wed April 28, 2021';
  //   $appointment = [
  //     'name' => 'gilson antonio dos Reis',
  //     'email' => 'test@test.com',
  //     'phone' => '9999999999',
  //     'message' => 'test message',
  //     'selectedMeeting' => 1,
  //     'address' => '116 Nichols Ave, Watertown - MA',
  //     'business' => 'GAR Solutions',
  //     'reference' => 'aassddffgghhjjkkll;;QQWWEERRTTYYUUIII',
  //     'id' => 5
  //   ];
  //
  //
  //     return new App\Mail\AppointmentMarkdown($appointment, $timeMail, $dateMail );
  // });

});



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
