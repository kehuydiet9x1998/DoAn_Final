<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;
    use Notifiable, SoftDeletes;
    protected $table = 'users';

    protected $fillable = [
        'anhdaidien',
        'username',
        'password',
        'vaitro',
        'trangthai',
    ];
    protected $hidden = ['password'];
    protected $dates = ['deleted_at'];
}
