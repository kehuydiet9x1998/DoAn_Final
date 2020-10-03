<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KhoaHoc extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'khoa_hoc';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'tenkhoahoc',
        'dotuoi',
        'sisotoida',
        'capdo',
        'noidung',
        'dieukienhoc',
        'hocphi',
        'loai_khoa_hoc_id',
        'level_id',
    ];

    public function loaiKhoaHoc()
    {
        return $this->belongsTo(LoaiKhoaHoc::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function dsLopHoc()
    {
        return $this->hasMany(LopHoc::class);
    }

    public function dsBaiGiang()
    {
        return $this->hasMany(BaiGiang::class);
    }

    public function dsHinhAnh()
    {
        return $this->hasMany(HinhAnhKhoaHoc::class);
    }

    public function dsChiTietHocPhi()
    {
        return $this->hasMany(ChiTietHocPhi::class);
    }
}
