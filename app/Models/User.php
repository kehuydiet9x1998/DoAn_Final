<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
  use HasFactory;
  use Notifiable, SoftDeletes;
  protected $table = 'users';

  protected $fillable = [
    'anhdaidien',
    'name',
    'password',
    'vaitro',
    'trangthai',
  ];
  protected $hidden = ['password'];
  protected $dates = ['deleted_at'];

  public function giaoVien()
  {
    return $this->hasOne(GiaoVien::class);
  }

  public function hocSinh()
  {
    return $this->hasOne(HocSinh::class);
  }

  public function nhanVien()
  {
    return $this->hasOne(NhanVien::class);
  }

  public function roles()
  {
    return $this->belongsToMany(Role::class);
  }

  public static function taoUser($table)
  {
    $id = DB::select("SHOW TABLE STATUS LIKE '$table'");
    $next_id = $id[0]->Auto_increment;

    $vaitro = [
      'hoc_sinh' => 'student',
      'giao_vien' => 'teacher',
      'nhan_vien' => 'contact',
    ];

    $user = User::create([
      'name' => $vaitro[$table] . sprintf("%04d", $next_id),
      'password' => bcrypt('123456'),
      'vaitro' => $vaitro[$table],
      'trangthai' => 'Hoạt động',
      'anhdaidien' =>
        "https://robohash.org/" .
        bin2hex(random_bytes(20)) .
        "?set=set4&bgset=&size=400x400",
    ]);

    return $user->id;
  }
}