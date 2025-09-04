<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::all();

        return view('dashboard.users.index', compact('users'));
    }
    public function create()
    {
        return view('dashboard.users.form');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'role' => 'required|in:admin,user',
            'password' => 'required|string|min:6',
        ]);

        User::create([
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'role' => $request->input('role'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan.');
    }
    public function edit($id)
    {
        $user = User::where('id', $id)->first();

        return view('dashboard.users.form', ['user' => $user]);
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'role' => 'required|in:admin,user',
        ]);

        $user->update($request->only('name', 'username', 'role'));

        return redirect()->route('user.index')->with('success', 'User berhasil diperbarui.');
    }
    public function show()
    {
        return view('dashboard.users.show');
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('user.index')->with('success', 'User berhasil dihapus.');
    }
}
