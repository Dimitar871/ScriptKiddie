<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'salt'
    ];

    protected $hidden = [
        'password', 'remember_token', 'salt'
    ];

    // Add this method to verify passwords
    public function validateForPassportPasswordGrant($password)
    {
        return $this->password === $this->hashPassword($password);
    }

    // Custom password hashing
    public function hashPassword($value)
    {
        return hash_pbkdf2(
            'sha256',
            $value,
            $this->salt,
            100000,
            32
        );
    }

    // Mutator for password hashing
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = $this->hashPassword($value);
    }
    public function getAuthPassword()
{
    return $this->password;
}
}