<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|unique:users|max:255',
            'email' => 'required|email|unique:users|max:255',
        ]);

        // Simpan data
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
        ]);

        return response()->json(['message' => 'User created successfully']);
    }
}

