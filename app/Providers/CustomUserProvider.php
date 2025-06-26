<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\UserProvider;

class CustomUserProvider implements UserProvider
{
      protected $hasher;
    protected $model;

    public function __construct($hasher, $model)
    {
        $this->hasher = $hasher;
        $this->model = $model;
    }

    public function retrieveById($identifier)
    {
        return User::find($identifier);
    }

    public function retrieveByToken($identifier, $token)
    {
        return User::where('id', $identifier)
            ->where('remember_token', $token)
            ->first();
    }

    public function updateRememberToken(Authenticatable $user, $token)
    {
        // Type-hint the User model specifically
        if ($user instanceof User) {
            $user->setRememberToken($token);
            $user->save();
        }
    }

    public function retrieveByCredentials(array $credentials)
    {
        return User::where('email', $credentials['email'])->first();
    }

    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        // Type-hint the User model specifically
        if (!$user instanceof User) {
            return false;
        }

        return $user->password === hash_pbkdf2(
            'sha256',
            $credentials['password'],
            $user->salt,
            100000,
            32
        );
    }

    public function rehashPasswordIfRequired(Authenticatable $user, array $credentials, bool $force = false)
    {
        return false; // PBKDF2 doesn't need rehashing
    }
}