<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index($elmts = 25){
        $users = User::paginate($elmts);
        return view('pages.usersIndex', compact(['users', 'elmts']));
    }
}
