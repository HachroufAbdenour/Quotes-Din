<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\UserRessource;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        return UserRessource::collection(User::paginate(10));
    }



}
