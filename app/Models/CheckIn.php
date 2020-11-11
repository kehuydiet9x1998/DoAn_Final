<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CheckIn extends Model
{
  use HasFactory;
  use SoftDeletes;
  protected $table = 'check_in';
  protected $dates = ['deleted_at'];
  protected $fillable = ['giocheckin', 'giocheckout', 'buoi_hoc_id'];

  public function buoiHoc()
  {
    return $this->belongsTo(BuoiHoc::class);
  }

  public function nhanVien()
  {
    return $this->belongsTo(NhanVien::class);
  }

  public function getGiocheckinAttribute($value)
  {
    if ($value == null) {
      return '<i>...</i>';
    }
    $time = strtotime($value);
    return date('h:i', $time);
  }

  public function getGiocheckoutAttribute($value)
  {
    if ($value == null) {
      return '<i>...</i>';
    }
    $time = strtotime($value);
    return date('h:i', $time);
  }
}