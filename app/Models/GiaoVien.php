<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Query\Builder as QueryBuilder;

class GiaoVien extends Model
{
  use HasFactory;
  use SoftDeletes;

  protected $table = 'giao_vien';
  //protected $dates = ['deleted_at'];
  protected $fillable = [
    'cmnd',
    'hodem',
    'ten',
    'ngaysinh',
    'gioitinh',
    'sodienthoai',
    'email',
    'diachi',
    'tinhtrang',
    'user_id',
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function dsLopHoc()
  {
    return $this->hasMany(LopHoc::class);
  }

  public function dsBuoiHoc()
  {
    return $this->hasMany(BuoiHoc::class);
  }

  public static function layDanhSach()
  {
    return NhanVien::whereHas('chucVu', function (QueryBuilder $query) {
      $query->where('ten', 'like', 'Giảng viên');
    })->get();
  }
}
