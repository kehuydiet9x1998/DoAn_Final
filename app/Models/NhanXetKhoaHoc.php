<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NhanXetKhoaHoc extends Model
{
  use HasFactory;
  use SoftDeletes;
  protected $table = 'nhan_xet_khoa_hoc';
  protected $dates = ['deleted_at'];
  protected $fillable = [
    'user_id',
    'khoa_hoc_id',
    'thoigian',
    'noidung',
  ];
  public function user()
  {
    return $this->belongsTo(User::class);
  }
  public function khoaHoc()
  {
    return $this->belongsTo(KhoaHoc::class);
  }
}
