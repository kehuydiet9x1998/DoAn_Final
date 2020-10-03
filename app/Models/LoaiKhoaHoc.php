<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoaiKhoaHoc extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'loai_khoa_hoc';
    protected $fillable = ['mota', 'tenloaikhoahoc'];
    protected $dates = ['deleted_at'];

    public function dsKhoaHoc()
    {
        return $this->hasMany(KhoaHoc::class);
    }
}
