<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{


    public function sendMessage(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        try {
            Mail::to('kakajanov@sahet-dev.com')->send(new ContactMail($validatedData));
            return response()->json(['message' => 'Your message has been sent successfully!'], 200);
        } catch (Exception $e) {
            Log::error('Failed to send email: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to send your message. Please try again later.'], 500);
        }
    }

}
