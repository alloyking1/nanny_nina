<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Http\Requests\UserRequest;
use App\Traits\FilterTrait;

class UserController extends Controller
{
    use FilterTrait;
    /**
     * return collection of all users
     * 
     */
    public function index(UserRequest $request)
    {
        $result = $this->filterRequest();
        return response()->json($result);
    }
}
