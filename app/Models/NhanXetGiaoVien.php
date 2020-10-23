<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NhanXetGiaoVien extends Model
{
  use HasFactory;
  use SoftDeletes;


  protected $table = 'nhan_xet_giao_vien';
  protected $dates = ['deleted_at'];
  protected $fillable = [
    'user_id',
    'giao_vien_id',
    'thoigian',
    'noidung',
  ];
  public function user()
  {
    return $this->belongsTo(User::class);
  }
  public function giaoVien()
  {
    return $this->belongsTo(GiaoVien::class);
  }
}