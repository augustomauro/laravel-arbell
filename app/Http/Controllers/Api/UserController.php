<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $auth = $request->user();

        // Solo permitir si es admin
        if ($auth->profile_id !== 1) {
            return response()->json(['message' => 'No autorizado'], 403);
        }

        $users = \App\Models\User::all();
        return response()->json($users);
    }

    public function update(Request $request)
    {
        $user = $request->user();

        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'email' => ['sometimes', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'password' => 'sometimes|string|min:8|confirmed',
            'phone' => 'sometimes|string|max:20',
            'profile_id' => 'sometimes|numeric|in:1,2'
        ]);

        if (isset($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        }

        $user->update($validated);

        return response()->json([
            'message' => 'Usuario actualizado correctamente.',
            'user' => $user
        ]);
    }

    public function destroy(Request $request)
    {
        $user = $request->user();

        $user->tokens()->delete(); // revocar todos los tokens
        $user->delete();           // eliminar cuenta

        return response()->json([
            'message' => 'Usuario eliminado correctamente.'
        ]);
    }
}
