<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BaiGiang extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'bai_giang';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'tenbaigiang',
        'noidung',
        'thoigiandukien',
        'khoa_hoc_id',
    ];

    public function khoaHoc()
    {
        return $this->belongsTo(KhoaHoc::class);
    }

    public function dsBuoiHoc()
    {
        return $this->hasMany(BuoiHoc::class);
    }
}
