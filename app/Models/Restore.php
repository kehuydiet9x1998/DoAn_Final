<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Restore extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'restore';
    protected $dates = ['deleted_at'];
    protected $fillable = ['tenfile', 'ngaytao', 'duongdan', 'ketqua'];
}
