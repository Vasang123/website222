<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }
    public function login(Request $request){
        // dd($request->all());
        $request->validate([
            'initial' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt(['initial' => $request->initial, 'password' => $request->password],$request->remember)){
            return redirect()->route('home');
        }
        session()->flash('message', 'Invalid credentials');
        return redirect('/');
    }

    public function showChangePassword()
    {
        return view('auth.change_password');
    }
    public function changePassword(Request $request){
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password|min:6'
        ]);
        // dd($request->all());
        if(Hash::check($request->old_password, Auth::user()->password)){
            // dd('masuk');
            $user = User::find(Auth::user()->id);
            $user->password = bcrypt($request->password);
            $user->save();
            // session()->flash('message', 'Password changed successfully');
            return redirect()->back()->with('success', 'Password changed successfully');
        }else{
            return redirect()->back()->withErrors(['old_password' => 'Old password is incorrect']);
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
