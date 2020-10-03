<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LopHoc extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'lop_hoc';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'tenlop',
        'ngaytao',
        'siso',
        'trangthai',
        'ghichu',
        'khoa_hoc_id',
    ];

    public function khoaHoc()
    {
        return $this->belongsTo(khoaHoc::class);
    }

    public function dsBuoiHoc()
    {
        return $this->hasMany(BuoiHoc::class);
    }

    public function dsThoiGianHoc()
    {
        return $this->hasMany(ThoiGianHoc::class);
    }

    public function dsLopHoc()
    {
        return $this->hasMany(PhanLop::class);
    }
}
