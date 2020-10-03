<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NhanVien extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'nhan_vien';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'cmnd',
        'hodem',
        'ten',
        'ngaysinh',
        'gioitinh',
        'sodienthoai',
        'email',
        'diachi',
        'tinhtrang',
        'chuc_vu_id',
        'user_nhan_vien_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function chucVu()
    {
        return $this->belongsTo(ChucVu::class);
    }

    public function dsHocPhi()
    {
        return $this->hasMany(HocPhi::class);
    }

    public function hopDong()
    {
        return $this->hasOne(HopDong::class);
    }

    public function dsLuong()
    {
        return $this->hasMany(Luong::class);
    }

    public function dsKhenThuongKyLuat()
    {
        return $this->hasMany(KhenThuongKyLuat::class);
    }
}
