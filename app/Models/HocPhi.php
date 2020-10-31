<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HocPhi extends Model
{
  use HasFactory;
  use SoftDeletes;
  protected $table = 'hoc_phi';
  protected $dates = ['deleted_at'];
  protected $fillable = [
    'candong',
    'dadong',
    'conno',
    'trangthai',
    'hoc_sinh_id',
  ];
  public function hocSinh()
  {
    return $this->belongsTo(HocSinh::class);
  }

  public function dsKhoanThu()
  {
    return $this->hasMany(KhoanThu::class);
  }

  public function dsHocPhi()
  {
    return $this->hasMany(ChiTietHocPhi::class);
  }
  public function lsHocPhi()
  {
    return $this->hasMany(LichSuHocPhi::class);
  }

  public function updateHocPhi()
  {
    $sotienthu = KhoanThu::where('hoc_phi_id', $this->id)
      ->get()
      ->sum('sotien');

    $sotiendanop = KhoanThu::where('hoc_phi_id', $this->id)
      ->where(function ($query) {
        $query->where('trangthai', 'Đã hoàn thành');
      })

      ->sum('sotien');

    $this->canthu = $sotienthu;
    $this->dadong = $sotiendanop;
    $this->conno = $sotienthu - $sotiendanop;
    if ($sotienthu - $sotiendanop == 0) {
      $this->trangthai = 'Đã hoàn thành';
    } else {
      $this->trangthai = 'Còn nợ';
    }
    $this->save();
  }
}