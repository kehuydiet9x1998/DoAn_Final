<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HocPhi extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'hoc_phi';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'lydo',
        'ngaynop',
        'trangthai',
        'sotiendong',
        'ghichu',
        'hoc_sinh_id',
        'nhan_vien_id',
    ];

    public function hocSinh()
    {
        return $this->belongsTo(HocSinh::class);
    }

    public function nhanVien()
    {
        return $this->belongsTo(NhanVien::class);
    }

    public function dsHocPhi()
    {
        return $this->hasMany(ChiTietHocPhi::class);
    }
}
