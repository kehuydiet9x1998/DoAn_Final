<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoaiGiaoVien extends Model
{
  use HasFactory;

  use SoftDeletes;
  protected $table = 'loai_giao_vien';
  protected $dates = ['deleted_at'];
  protected $guarded = ['proengsoft_jsvalidation'];

  public function dsGiaoVien()
  {
    return $this->hasMany(GiaoVien::class);
  }
}