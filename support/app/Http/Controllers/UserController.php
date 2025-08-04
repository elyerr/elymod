<?php

namespace App\Http\Controllers;

use App\Models\User\User;
use App\Models\User\Scope;
use Illuminate\Http\Request;
use App\Http\Controllers\WebController;

class UserController extends WebController
{
    public function index(Request $request, User $user)
    {

        $users = User::with(['scopes'])->take(50)->get();
        $scopes = Scope::all();

        return view('Core::users', compact(
            'users',
            'scopes'
        ));
    }

    public function scopes(Request $request, User $user)
    {
        $user->find($request->user_id)->scopes()->sync($request->scope_id);

        return redirect()->route('users');
    }

    public function createScope(Request $request, Scope $scope)
    {
        Scope::create($request->all());

        return redirect()->route('users');

    }
}
