<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'name',
        'bookcase',
        // 'category',
        // 'section',
        'author',
        'user_id',
    ];

    //To get the books created by the user
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
