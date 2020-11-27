<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LinhVuc extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'linh_vuc';
    protected $dates = ['deleted_at'];
    protected $fillable = ['hoc_sinh_id', 'loai_khoa_hoc_id'];

    public function hocSinh()
    {
      return $this->belongsTo(HocSinh::class);
    }

    public function loaiKhoaHoc()
    {
      return $this->belongsTo(LoaiKhoaHoc::class);
    }
}
