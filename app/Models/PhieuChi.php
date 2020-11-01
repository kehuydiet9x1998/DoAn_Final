<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhieuChi extends Model
{
  use HasFactory;

  protected $guarded = [];

  protected $table = 'phieu_chi';

  public function nhanVien()
  {
    return $this->belongsTo(NhanVien::class);
  }
}