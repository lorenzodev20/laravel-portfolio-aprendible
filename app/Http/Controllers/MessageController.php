<?php

namespace App\Http\Controllers;

use App\Mail\MessageRecieved;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store(Request $request){
        $msg = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required'
        ]);

        Mail::to('lorenzodev2020@gmail.com')->queue(new MessageRecieved($msg));

        return back()->with('status','Mensaje enviado. Nos comunicaremos contigo lo mas pronto posible');
    }
}
