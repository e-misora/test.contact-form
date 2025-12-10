<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // public function index(){
    //     $users=User::Paginate(7);
    //     return view('admin',['users'=>$users]);
    // }

    public function index(){
        return view('auth.register');
    }

    public function store(){
        return view('auth.login');
    }

    //     public function create(Request $request): RegisterViewResponse
    // {
    //     return app(RegisterViewResponse::class);
    // }
    /**
     * Create a new registered user.
     *
     */
    // public function store(Request $request,CreatesNewUsers $creator): RegisterResponse
    // {
    //     if (config('fortify.lowercase_usernames')) {
    //         $request->merge([
    //             Fortify::username() => Str::lower($request->{Fortify::username()}),
    //         ]);
    //     }
    //     event(new Registered($user = $creator->create($request->all())));

    //     $this->guard->login($user);

    //     return app(RegisterResponse::class);
    // }
}