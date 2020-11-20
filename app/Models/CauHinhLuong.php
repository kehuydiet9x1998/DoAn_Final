<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CauHinhLuong extends Model
{
  use HasFactory;

  use SoftDeletes;
  protected $table = 'cau_hinh_luong';
  protected $dates = ['deleted_at'];
  protected $guarded = ['proengsoft_jsvalidation'];

  public static function layGiaTri($tencauhinh)
  {
    return CauHinhLuong::where('ten', $tencauhinh)->first()->giatri;
  }
}