<?php

namespace App\Http\Controllers;
use App\Models\Vrs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user(); 
        return view('profile', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('edit-profile', compact('user'));
    }
    public function update(Request $request, $id)
    {
    $this->validate($request, [
        'name' => 'required|string',
        'email' => 'required|email|unique:vrs,email,' . $id,
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $user = Vrs::find($id);

    if ($user) {
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image', 'public');

            if ($user->image) {
                Storage::disk('public')->delete($user->image);
            }

            $user->image = $imagePath;
        }

        $user->save();

        return redirect()->route('profile')->with('success', 'Profile updated successfully');
    }

    return redirect()->route('profile')->with('error', 'Profile not found');
    }
    public function delete()
    {
        $user = Auth::user();

        if ($user) {
            Vrs::destroy($user->id);
            Auth::logout();
            return redirect()->route('home')->with('success', 'Profile deleted successfully');
        }

        return redirect()->route('profile')->with('error', 'Profile not found');
    }

    public function destroy()
    {
        return view('confirm-delete');
    }

}
