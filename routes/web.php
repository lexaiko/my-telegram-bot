<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelegramBotController;


Route::get('/', function () {
    return view('home');
})->name('telegram.form');

Route::post('/send-message', [TelegramBotController::class, 'sendMessage'])->name('telegram.send');
