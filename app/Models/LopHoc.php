<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LopHoc extends Model
{
  use HasFactory;
  use SoftDeletes;
  protected $table = 'lop_hoc';
  protected $dates = ['deleted_at'];
  protected $fillable = [
    'tenlop',
    'ngaytao',
    'siso',
    'trangthai',
    'ghichu',
    'khoa_hoc_id',
  ];

  public function getNgaybatdauAttribute($value)
  {
    return substr($value, 0, 10);
  }

  public function getNgayketthucAttribute($value)
  {
    return substr($value, 0, 10);
  }

  public function khoaHoc()
  {
    return $this->belongsTo(khoaHoc::class);
  }

  public function giaoVien()
  {
    return $this->belongsTo(GiaoVien::class);
  }

  public function dsBuoiHoc()
  {
    return $this->hasMany(BuoiHoc::class);
  }

  public function dsThoiGianHoc()
  {
    return $this->hasMany(ThoiGianHoc::class);
  }

  public function dsLopHoc()
  {
    return $this->hasMany(PhanLop::class);
  }
}
