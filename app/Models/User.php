<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    protected $hidden = ['password'];

    public function isAdmin()     { return $this->role === 'admin'; }
    public function isChairman()  { return $this->role === 'chairman'; }
    public function isTeacher()   { return $this->role === 'teacher'; }
    public function isStudent()   { return $this->role === 'student'; }
}