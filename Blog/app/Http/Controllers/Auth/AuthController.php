<?php

namespace App\Http\Controllers\Auth;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
    use AuthenticatesUsers, ThrottlesLogins;

    public function __construct()
    {
        $this->redirectAfterLogout = route('blog.index');
        $this->redirectTo = route('admin.posts.index');

        $this->middleware('guest', ['except' => 'logout']);
    }
}