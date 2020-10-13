<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HinhAnhKhoaHoc extends Model
{
  use HasFactory;
  use SoftDeletes;
  protected $table = 'hinh_anh_khoa_hoc';
  protected $dates = ['deleted_at'];
  protected $fillable = ['duongdan', 'khoa_hoc_id'];

  public function khoaHoc()
  {
    return $this->belongsTo(KhoaHoc::class);
  }
}