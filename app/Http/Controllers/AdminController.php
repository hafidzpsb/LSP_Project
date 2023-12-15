<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use function Ramsey\Uuid\v1;

class AdminController extends Controller
{
    public  function index(){
        $user_index = User::all();
        return view('admin.index', compact('user_index'));
    }
    public function adduser() {
        return view('admin.adduser');
    }
    public function addusr(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'phone' => 'required|string|max:15',
            'password' => 'required|string|min:8',
            'level' => 'required|integer',
        ]);

        // Create a new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'level' => $request->level,
        ]);
        // dd($request);
        return redirect('/admin');
        // Redirect to a success page or wherever you want
        // return redirect()->route('add.user')->with('success', 'User added successfully');
    }
    public  function deleteuser($id) {
        $data =User::find($id);
        $data->delete();
        return redirect('/admin');
    }
    public function updateuser($id) {
        $data =User::find($id);

        return view('admin.updateuser', compact('data'));
    }
    public function saveupdate($id, Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'phone' => 'nullable|string|max:20',
        ]);
        $user = User::find($id);
        $user->update($request->only('name', 'email', 'phone'));
        return redirect("/admin");
    }
}
