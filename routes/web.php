<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

Route::get('/', function (Request $request) {
    $page = $request->query('page', 'home');
    return view('index', compact('page'));
});

Route::post('/contact', function (Request $request) {
    $email = 'mr1663910@gmail.com'; // Pastikan alamat email benar
    $message = $request->input('message');

    Mail::raw($message, function ($msg) use ($email) {
        $msg->to($email)->subject('Pesan dari Website');
    });

    return redirect('/?page=contact')->with('success', 'Pesan berhasil dikirim!');
});
