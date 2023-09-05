<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveUserRequest;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function index(Request $request)
    {
        $inputs = $request->all();

        $query = User::query();

        if ($keyword = $request->input('keyword')) {
            $query->where('name', 'like', "%$keyword%")
                ->orWhere('email', 'like', "%$keyword%")
                ->orWhere('phone', 'like', "%$keyword%");
        }
        $usersPaginate = $query->paginate(10);

        return view('users.index', [
            'usersPaginate' => $usersPaginate
        ]);
    }

    public function create()
    {
        return view('users.form');
    }

    public function store(SaveUserRequest $request)
    {
        $inputs = $request->all();
        $inputs['password'] = bcrypt($request->password);

        User::create();

        return to_route('user.index');
    }

    public function edit($id)
    {
        return view('users.form', [
            'user' => User::find($id)
        ]);
    }

    public function update(SaveUserRequest $request, $id)
    {
        $inputs = array_filter($request->all());

        if ($request->password) {
            $inputs['password'] = bcrypt($request->password);
        }

        User::find($id)->update($inputs);

        return to_route('user.index');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();

        return to_route('user.index');
    }

    public function show(string $id)
    {
        $user = User::findOrFail($id);
        $courses = $user->courses()->paginate(10);

        return view('users.show', [
            'user' => $user,
            'courses' => $courses
        ]);
    }
}
