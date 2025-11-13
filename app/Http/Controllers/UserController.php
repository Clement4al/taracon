<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class UserController extends Controller
{
//    public function __construct()
//    {
//        $this->authorizeResource(User::class);
//    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $users = User::latest()->withCount('orders')->{$request->type}()->get();
        $roles = Role::all();

        return view('users.index', compact('users', 'roles'));
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): View
    {
//        $roles = $user->isAdmin() ? Role::assignable()->get() : [];
        $roles = Role::all();
        return view('users.show', compact(['user', 'roles']));
    }
}
