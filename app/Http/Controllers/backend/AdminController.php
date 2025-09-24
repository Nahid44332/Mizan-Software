<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adminProfile()
    {
        return view('backend.admin.profile');
    }

     public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $user->name  = $request->name;
        $user->email = $request->email;

        if ($request->hasFile('image')) {

            if ($user->image && file_exists('backend/images/admin/'.$user->image)) {
                unlink('backend/images/admin/' . $user->image);
            }

            $imageName = time() . '_Admin.' . $request->image->extension();
            $request->image->move('backend/images/admin/', $imageName);

            $user->image = $imageName;
        }

        $user->save();
        toastr()->success('প্রোফাইল সফলভাবে আপডেট হয়েছে!');
        return redirect()->back();
    }

     public function updatePassword(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6|confirmed',
        ]);

        if (!Hash::check($request->current_password, $user->password)) {
            toastr()->error('⚠ পাসওয়ার্ড সঠিক নয়!');
            return redirect()->back();
        }

        $user->password = Hash::make($request->new_password);

        $user->save();
        toastr()->success('✅ পাসওয়ার্ড সফলভাবে পরিবর্তন হয়েছে!');
        return redirect()->back();
    }
}
