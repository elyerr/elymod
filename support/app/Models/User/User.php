<?php


namespace App\Models\User;
// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\Auth;
use Database\Factories\UserFactory;

class User extends Auth
{
    public static function newFactory()
    {
        return UserFactory::new();
    }
}
