<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KhenThuongKyLuat extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'khen_thuong_ky_luat';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'ngaytao',
        'ten',
        'lydo',
        'sotien',
        'ghichu',
        'loai',
        'nhan_vien_id',
    ];

    public function nhanVien()
    {
        return $this->belongsTo(NhanVien::class);
    }
}
