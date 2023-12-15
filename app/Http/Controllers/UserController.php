<?php

namespace App\Http\Controllers;

use App\Models\User;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user_index = User::all();
        // return view('admin.user_index', compact('user_index'));
        return view('user.services');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
            'isAdmin' => 'required|string',
        ]);
        $user_store = User::create($request->all());
        return $user_store;
    }
    public function update(Request $request, $id_user)
    {
        $user_update = User::find($id_user);
        $user_update -> update($request->all());
        return $user_update;
    }
    public function delete(Request $request, $id_user)
    {
        $user_delete = User::find($id_user);
        $user_delete -> delete();
        return 200;
    }
    function services() {
        return view('user.services');
    }
    function profile() {
        return view('user.profile');
    }
    function updateprof() {
        return view('user.updateprofile');
        // return('sajdlka');
    }
    public function save(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'.auth()->id(),
            'phone' => 'nullable|string|max:20',
        ]);

        auth()->user()->update($request->only('name', 'email', 'phone'));

        return redirect('/user/profile');
    }
    public function updatepw() {
        return  view('user.updatepw');
    }
    public function updatepassword(Request $request) {
        // dd($request);
    $request->validate([
        'current_password' => 'required|string',
        'new_password' => 'required|string|min:8|confirmed',
    ]);

    $user = auth()->user();

    // Check if the provided current password is correct
    if (!Hash::check($request->input('current_password'), $user->password)) {
        return redirect()->back()->with('error', 'Current password is incorrect.');
    }

    // Update the user's password
    $user->update([
        'password' => Hash::make($request->input('new_password')),
    ]);

    return redirect('/user/profile');
    }
}
