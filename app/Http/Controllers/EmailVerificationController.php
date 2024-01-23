<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EmailVerificationController extends Controller
{
    public function verify(Request $request)
    {
    $request->validate([
        'validation_code' => 'required|digits:5',
    ]);

    $user = User::where('email', $request->user()->email)->first();

    if (!$user || $request->validation_code != $user->validation_code) {
        return back()->withErrors(['validation_code' => 'The number entered is incorrect.']);
    }

    $user->update(['email_verified_at' => now()]);

    return view('verification_success');
    }

}
