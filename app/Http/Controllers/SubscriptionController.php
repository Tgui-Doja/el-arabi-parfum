<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        // Handle subscription logic here
        // For example, you can save the email to your database

        $email = $request->input('email');
        // Process the email subscription, e.g., save it to the database

        return response()->json(['message' => 'Subscription successful'], 200);
    }
}
