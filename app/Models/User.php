<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
    ];

    public function books(){
        return $this->hasMany(Book::class);
    }
    
    protected $hidden = [
        'password',
        'remember_token',
    ];

   public function isAdmin(){
       return $this->role_id === 1;
   }

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
