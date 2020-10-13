<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BaiTap extends Model
{
  use HasFactory;
  use SoftDeletes;
  protected $table = 'bai_tap';
  protected $dates = ['deleted_at'];
  protected $fillable = [
    'tenbaitap',
    'loaicauhoi',
    'hinhanhminhhoa',
    'noidung',
    'dapan1',
    'dapan2',
    'dapan3',
    'dapan4',
    'dapan',
    'bai_giang_id',
  ];

  public function baiGiang()
  {
    return $this->belongsTo(BaiGiang::class);
  }

  public function dsDanhSachBaiTap()
  {
    return $this->belongsTo(DanhSachBaiTap::class);
  }
}