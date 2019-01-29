<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
  function index()
  {
    return view('pages.contact');
  }
  function send(Request $request)
  {
    $this->validate($request,
    [
      'name' => 'required',
      'Email' => 'required|email',
      'message' => 'required',
    ]);

    $data = array(
       'name' => $request->name,
       'message' => $request->message
    );

    Mail::to('sherlockfood@outlook.com')->send(new SendMail($data));
    return back()->with('succes', 'Thanks for contacting us!');
  }
}
