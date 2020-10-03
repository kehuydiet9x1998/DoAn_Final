<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Luong extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'luong';
    protected $fillable = [
        'thang',
        'luonggoc',
        'thuong',
        'phat',
        'thuclinh',
        'trangthai',
        'ghichu',
        'nhan_vien_id',
    ];
    protected $dates = ['deleted_at'];

    public function nhanVien()
    {
        return $this->belongsTo(NhanVien::class);
    }
}
