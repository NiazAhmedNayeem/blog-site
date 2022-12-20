<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    public function index()
    {
        return view('admin.user.index');
    }
    public function create(Request $request)
    {
        User::newUser($request);
        return redirect('/add-user')->with('message', 'New user create successfully.');
    }
    public function manage()
    {
        return view('admin.user.manage', ['users' => User::orderBy('id', 'desc')->get()]);
    }
    public function detail($id)
    {
        return view('admin.user.detail', ['user' => User::find($id)]);
    }
}
