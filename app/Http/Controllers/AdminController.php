<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index() {
        return view('admin.index');
    }
    public function getCar()
    {
        $car_index = Car::with('type')->get();
        return view('admin.index', compact('car_index'));
    }
    function getUser() {
        $userData = User::all();
        return view('admin.index', compact('userData'));
    }
}
