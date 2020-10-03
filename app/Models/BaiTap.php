<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BaiTap extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'bai_tap';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'tenbaitap',
        'noidung',
        'trangthai',
        'diem',
        'buoi_hoc_id',
    ];

    public function buoiHoc()
    {
        return $this->belongsTo(BuoiHoc::class);
    }
}
