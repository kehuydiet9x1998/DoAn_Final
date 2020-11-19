<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HocCu extends Model
{
  use HasFactory;
  use SoftDeletes;
  protected $table = 'hoc_cu';
  protected $dates = ['deleted_at'];
  protected $fillable = [
    'tenthietbi',
    'hinhanhthietbi',
    'soluong',
    'trangthai',
    'lop_hoc_id',
    'kho_hoc_cu_id',
  ];

  public function lopHoc()
  {
    return $this->belongsTo(LopHoc::class);
  }
  public function khohoccu()
  {
    return $this->belongsTo(KhoHocCu::class, 'kho_hoc_cu_id', 'id');
  }
}
