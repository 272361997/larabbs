<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * 隐性路由模型绑定
     */
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }
}
