<?php

use App\Mail\MailableA;
use App\Mail\MailableB;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    $mailableA = new MailableA();
    $mailableB = new MailableB();

    logger('-------------------------------------------');
    logger('email A');
    Mail::mailer('log')->to('test@email.com')->send($mailableA);

    logger('-------------------------------------------');
    logger('email B');
    Mail::mailer('log')->to('test@email.com')->send($mailableB);

    return;
});
