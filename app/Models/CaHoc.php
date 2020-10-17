<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CaHoc extends Model
{
  use HasFactory;
  use SoftDeletes;
  protected $table = 'ca_hoc';
  protected $dates = ['deleted_at'];
  protected $fillable = ['thoigianbatdau', 'thoigianketthuc', 'buoi'];

  public function dsThoiGianHoc()
  {
    return $this->hasMany(ThoiGianHoc::class);
  }

  public function getThoigianbatdauAttribute($value)
  {
    $time = strtotime($value);
    return date('h:m', $time);
  }
  public function getThoigianketthucAttribute($value)
  {
    $time = strtotime($value);
    return date('h:m', $time);
  }
}