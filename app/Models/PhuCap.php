<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhuCap extends Model
{
  use HasFactory;
  use SoftDeletes;
  protected $table = 'phu_cap';
  protected $dates = ['deleted_at'];
  protected $guarded = ['proengsoft_jsvalidation'];

  public function nhanVien()
  {
    return $this->belongsTo(NhanVien::class);
  }

  public function giaoVien()
  {
    return $this->belongsTo(GiaoVien::class);
  }
}