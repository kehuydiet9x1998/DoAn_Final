<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NhanXetHocSinh extends Model
{
  use HasFactory;
  // use SoftDeletes;
  //protected $guarded = ['proengsoft_jsvalidation'];
  protected $table = 'nhan_xet_hoc_sinh';
  // protected $dates = ['deleted_at'];
  protected $fillable = [
    'khanangtiepthu',
    'khanangsangtao',
    'apdungkienthuc',
    'lambaitapvenha',
    'ythuchoctap',
    'tinhthanhoctap',
    'kynanglamviecnhom',
    'kynangthuyettrinh',
    'hoc_sinh_id',
    'buoi_hoc_id',
    'lop_hoc_id',
    'khoa_hoc_id',
  ];

  public function buoiHoc()
  {
    return $this->belongsTo(BuoiHoc::class);
  }
  public function hocSinh()
  {
    return $this->belongsTo(HocSinh::class);
  }
  public function lopHoc()
  {
    return $this->belongsTo(LopHoc::class);
  }
  public function khoaHoc()
  {
    return $this->belongsTo(KhoaHoc::class);
  }
}
