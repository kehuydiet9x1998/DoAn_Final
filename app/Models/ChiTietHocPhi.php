<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChiTietHocPhi extends Model
{
  use HasFactory;
  use SoftDeletes;
  protected $table = 'chi_tiet_hoc_phi';
  protected $dates = ['deleted_at'];
  protected $fillable = ['lich_su_hoc_phi_id', 'khoan_thu_id', 'dadong'];

  public function lichSuHocPhi()
  {
    return $this->belongsTo(LichSuHocPhi::class);
  }

  public function khoanThu()
  {
    return $this->belongsTo(KhoanThu::class);
  }
}