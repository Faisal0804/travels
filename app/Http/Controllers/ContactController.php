<?php

namespace App\Http\Controllers;
use App\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $table = new Message();
        $table->name = $request->name;
        $table->email = $request->email;
        $table->subject = $request->subject;
        $table->message = $request->message;
        $table->save();
        return back()->with(['message' => 'Submitted.']);
    }
}
