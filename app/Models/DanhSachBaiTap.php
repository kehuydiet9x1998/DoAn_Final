<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DanhSachBaiTap extends Model
{
  use HasFactory;
  use SoftDeletes;
  protected $table = 'danh_sach_bai_tap';
  protected $dates = ['deleted_at'];
  protected $fillable = [
    'bai_tap_id',
    'buoi_hoc_id',
    'hoc_sinh_id',
    'trangthai',
    'diem',
    'nhanxet',
    'chon',
  ];

  public function buoiHoc()
  {
    return $this->belongsTo(BuoiHoc::class);
  }

  public function baiTap()
  {
    return $this->belongsTo(BaiTap::class);
  }

  public function hocSinh()
  {
    return $this->belongsTo(HocSinh::class);
  }
}