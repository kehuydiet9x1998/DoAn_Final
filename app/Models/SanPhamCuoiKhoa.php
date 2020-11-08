<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SanPhamCuoiKhoa extends Model
{
  use HasFactory;
  use SoftDeletes;
  protected $table = 'san_pham_cuoi_khoa';
  protected $dates = ['deleted_at'];
  protected $fillable = [
    'hoc_sinh_id',
    'lop_hoc_id',
    'mota',
    'noidung',
    'fileslide'
  ];
  public function hocSinh()
  {
    return $this->belongsTo(HocSinh::class);
  }
  public function lopHoc()
  {
    return $this->belongsTo(LopHoc::class);
  }
}