<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Fetch users with pagination to keep the backend fast
        $users = User::latest()->paginate(15);
        return view('backend.users.index', compact('users'));
    }

    public function edit(User $user)
    {
        return view('backend.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:8|confirmed', // 'confirmed' checks for 'password_confirmation'
        ]);

        $data = $request->only('name', 'email');

        // Only update the password if it's provided
        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->password);
        }

        $user->update($data);

        return redirect()->route('backend.users.index')
                         ->with('success', 'User profile and security updated successfully.');
    }

    // You can add edit/update/destroy methods here later for full profile management
}