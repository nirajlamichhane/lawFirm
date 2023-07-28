<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function user()
    {
        return view('home');
    }

    public function index()
    {
        $users = User::customer()->get();
        return view('admin.users.index', compact('users'));
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back()->with('success', 'User is Deleted');
    }
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = User::findOrfail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->update();
        return redirect()->route('users.index')->with('success', 'User is Updated Successfully');
    }

   
}

