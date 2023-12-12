<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user_index = User::all();
        return view('admin.user_index', compact('user_index'));
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
}
