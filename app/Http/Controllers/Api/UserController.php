<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Response;

class UserController extends Controller
{
//    public function __construct()
//    {
//        $this->authorizeResource(User::class);
//    }

    public function store(StoreUserRequest $request)
    {
        $user = User::create($request->validated());

        return response()->api('Registration successful', headers: [
            'x-location' => route('users.show', $user)
        ]);
    }
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->validated());

        return response()->api('Profile update successful');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return response()->api('Deleted successfully.');
    }
}
