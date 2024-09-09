<?php

use App\Http\Controllers\ShowController;
use App\Http\Controllers\Contact\ContatController;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[ShowController::class, 'qrCodeLanding'])->name('home')  ;
Route::post('/contact', [ContatController::class, 'sendContactForm'])->name('contact.send');

Route::get('/send-test-email', function () {
    $testData = [
        'name' => 'Test User',
        'email' => 'testuser@example.com',
        'reason' => 'Test Reason',
        'phone' => '1234567890',
        'message' => 'This is a test message.'
    ];

    Mail::send(new ContactFormMail($testData))->to('us@contact.spadserver.com', 'John Doe');

    return 'Test email sent!';
});

Route::get('/iran-european-cloud-servers', function () {
    return view('services.iran_european_cloud');
})->name('iran-european-cloud-servers');

Route::get('/devops', function () {
    return view('services.devops');
})->name('devops');

Route::get('/security', function () {
    return view('services.security');
})->name('security');

Route::get('/website', function () {
    return view('services.website');
})->name('website');

Route::get('/ip-service', function () {
    return view('services.ip');
})->name('ip-service');

Route::get('/educational', function () {
    return view('services.educational');
})->name('educational');
