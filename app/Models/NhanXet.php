<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NhanXet extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'nhan_xet';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'nguoinhanxet_id',
        'doituongnhanxet_id',
        'thoigian',
        'loainhanxet',

        'nhanxet',
    ];
}
