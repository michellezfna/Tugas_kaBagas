<?php

namespace App\Http\Controllers; // Tambahkan namespace ini

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::to('your-email@example.com')->send(new ContactMail($request->email, $request->message));

        return back()->with('success', 'Email berhasil dikirim!');
    }
}
