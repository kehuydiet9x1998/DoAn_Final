<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KhoanThu extends Model
{
  use HasFactory;
  use SoftDeletes;
  protected $table = 'khoan_thu';
  protected $dates = ['deleted_at'];
  protected $fillable = ['tenkhoanthu', 'sotien', 'trangthai'];

  public function hocPhi()
  {
    return $this->belongsTo(HocPhi::class);
  }
}