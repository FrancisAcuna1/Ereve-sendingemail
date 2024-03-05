<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SampleMail; 
use Mail;

class mailchuchuness extends Controller
{
    public function send_email(Request $request)
    {
    $request->validate([
        'file' => 'file|max:10240', 
    ]);

    $name = $request->input('name');
    $email = $request->input('email');
    $message = $request->input('txtMsg');
    $attachment = $request->file('file');

    Mail::to($request->input('email'))->send(new SampleMail($name, $email, $message, $attachment));

    return redirect('success');
    }

    public function output()
    {
        return view("home");
    }

    public function success()
    {
        return view('success');
    }

    public function historyback()
    {
        return view("home");
    }
}
?>