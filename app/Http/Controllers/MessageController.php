<?php

namespace App\Http\Controllers;

use App\Mail\HelloMail;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $message = Message::orderBy('created_at', 'DESC')->get();
        return view('messages.index',compact('message'));
    }
    public function sendEmail()
    {
        $userEmail = 'rania.chakroun@etudiant-enit.utm.tn'; // The recipient's email address
    
        Mail::to($userEmail)->send(new HelloMail());
    
        return "Email sent successfully!";
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.contact');
    }

    public function store(Request $request)
    {
        $user = auth()->user(); // Récupérer l'utilisateur actuel

        $messageData = [
            'title' => $request->input('title'),
            'corps' => $request->input('corps'),
            'clientId' => $user->id,
        ];


        $message = new Message($messageData);
        $message->save();

        return redirect()->route('message.create')->with('success', 'Message envoyé avec succès !');
     }


    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
    }
}
