<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NhanXetHocSinh extends Model
{
  use HasFactory;
  protected $guarded = [];

  public function buoiHoc()
  {
    return $this->belongsTo(BuoiHoc::class);
  }
}