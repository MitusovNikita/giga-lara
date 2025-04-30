<?php
namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function getAllUsers()
    {
        return User::all();
    }

    public function getVerifiedUsers()
    {
        return User::emailVerifiedAt()->get();
    }
}
