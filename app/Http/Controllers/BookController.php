<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    function booktravel(){
        return view('user.booktravel');
    }
}
