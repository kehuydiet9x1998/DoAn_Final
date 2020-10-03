<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HopDong extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'hop_dong';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'ngaytao',
        'ngayhethan',
        'noidung',
        'trangthai',
        'ghichu',
        'nhan_vien_id',
    ];

    public function nhanVien()
    {
        return $this->belongsTo(NhanVien::class);
    }
}
