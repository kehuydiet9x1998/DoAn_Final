<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhongHoc extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'phong_hoc';
    protected $dates = ['deleted_at'];
    protected $fillable = ['tenphong', 'mota', 'trangthai'];

    public function dsBuoiHoc()
    {
        return $this->hasMany(BuoiHoc::class);
    }
}
