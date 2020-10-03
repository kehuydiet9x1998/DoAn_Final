<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HocSinh extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'hoc_sinh';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'hodem',
        'ten',
        'email',
        'sodienthoai',
        'ngaysinh',
        'gioitinh',
        'diachi',
        'trangthai',
        'loaihocsinh',
        'user_hoc_sinh_id',
        'phu_huynh_id',
    ];
    public function userHocSinh()
    {
        return $this->belongsTo(UserHocSinh::class);
    }

    public function phuHuynh()
    {
        return $this->belongsTo(PhuHuynh::class);
    }

    public function dsLichTraiNghiem()
    {
        return $this->hasMany(LichTraiNghiem::class);
    }

    public function dsHocPhi()
    {
        return $this->hasMany(HocPhi::class);
    }

    public function dsDiem()
    {
        return $this->hasMany(Diem::class);
    }

    public function dsDiemDanh()
    {
        return $this->hasMany(DiemDanh::class);
    }



    public function dsLopHoc()
    {
        return $this->hasMany(PhanLop::class);
    }

    public function dsNghiPhep()
    {
        return $this->hasMany(NghiPhep::class);
    }
}
