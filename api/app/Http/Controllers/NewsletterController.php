<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsletterController extends Controller
{
    /**
     * Add user to newsletters subscribers
     * @param \Illuminate\Http\Request $request
     */

     public function subscribe(Request $request) {
        $validatedEmail = $request->validate([
            'email' => ['bail', 'required', 'email', 'max:255', 'unique:newsletter_subscribers']
        ], [
            'email.unique' => 'This email is already subscribed to our newsletter'
        ]);

        DB::table('newsletter_subscribers')->insert([
            ['email' => $validatedEmail['email']]
        ]);

        return back()->with('success', 'You\'ve sucessfully subscribed to our newsletter');
     }
}
