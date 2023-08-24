<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveUserRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index', [
            'users' => User::get()
        ]);
    }

    public function create()
    {
        return view('users.form');
    }

    public function store(SaveUserRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'gender' => $request->gender,
            'avatar' => null,
            'type' => User::TYPE['admin'],
            'password' => $request->password
        ]);

        return to_route('user.index');
    }

    public function edit($id)
    {

    }
}
