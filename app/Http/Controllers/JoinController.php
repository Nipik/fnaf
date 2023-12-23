<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Mail\ValidationMail;
use Illuminate\Support\Facades\Mail;

class JoinController extends Controller
{
    public function join()
    {
        return view('join');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:vrs|string',
            'birth' => 'required|date|before:16 years ago',
            'password' => 'required|min:7|string',
            'image' => 'required|image',
        ], [
            'image.required' => 'The image field is required',
            'email.unique' => 'This email is already in use',
            'email.string' => 'Email must be a valid email address',
            'email.required' => 'The email field is required',
            'password.min' => 'Password must contain at least 7 characters',
            'password.required' => 'The password field is required',
            'name.required' => 'The name field is required',
            'name.string' => 'The name must contain alphabetical characters',
            'birth.before' => 'Players under 16 cannot play this game',
            'birth.required' => 'The birth field is required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('join')->withErrors($validator)->withInput();
        }

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image', 'public');
        } 
        else{
            $imagePath = null;
        }

        $validationCode = random_int(10000, 99999);

        DB::table('vrs')->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'birth' => $request->input('birth'),
            'password' => bcrypt($request->input('password')),
            'validation_code' => $validationCode, 
            'image' => $imagePath,
        ]);
        Mail::to($request->input('email'))->send(new ValidationMail($validationCode));
        return view('congratulation');
    }
}
