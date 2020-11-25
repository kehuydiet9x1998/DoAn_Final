<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChucVu extends Model
{
  use HasFactory;
  use SoftDeletes;
  protected $table = 'chuc_vu';
  protected $dates = ['deleted_at'];
  protected $guarded = ['proengsoft_jsvalidation'];

  public function dsNhanVien()
  {
    return $this->hasMany(NhanVien::class);
  }

  public function soNhanVien()
  {
    return $this->dsNhanVien->count();
  }

  // public function dsLuong($thang)
  // {
  //   return $this->dsNhanVien()
  //     ->with('dsluong')
  //     ->get()
  //     ->pluck('dsluong')
  //     ->collapse()
  //     ->filter(function ($query) use ($thang) {
  //       $date = new Carbon($query->thang);
  //       return $date->month == $thang->month;
  //     });
  // }
}
