<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * return collection of all users
     * 
     */

    public function index()
    {
        return response()->json("Hello world");
    }
}
