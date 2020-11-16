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
    'role_id',
    'trangthai',
  ];
  protected $hidden = ['password'];
  protected $dates = ['deleted_at'];

  public function hasPermission(Permission $permission)
  {
    return !!optional(optional($this->role)->permissions)->contains(
      $permission
    );
  }

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

  public function role()
  {
    return $this->belongsTo(Role::class);
  }

  public function thongKeDiemDanh($thang)
  {
    $diemdanh = DiemDanh::whereYear('updated_at', '=', $thang->year)
      ->whereMonth('updated_at', '=', $thang->month)
      ->get();

    return [
      'Vắng' => $diemdanh
        ->filter(function ($item) {
          return $item->ketqua == -1;
        })
        ->count(),
      'Có mặt' => $diemdanh
        ->filter(function ($item) {
          return $item->ketqua == 1;
        })
        ->count(),
    ];
  }

  public function thongKeLuong()
  {
    $luong = [];
    $ngaydaunam = now()->startOfYear();
    $ngaycuoinam = now()->endOfYear();
    for (
      $date = $ngaydaunam->copy();
      $date->lt($ngaycuoinam);
      $date->addMonth(1)
    ) {
      array_push($luong, Luong::whereMonth('thang', $date->month)->thuclinh);
    }
    return $luong;
  }

  public function thongKeHocSinh()
  {
    $dangtuvan = [];
    $chinhthuc = [];
    $hocthu = [];
    $ngaydaunam = now()->startOfYear();
    $ngaycuoinam = now()->endOfYear();
    for (
      $date = $ngaydaunam->copy();
      $date->lt($ngaycuoinam);
      $date->addMonth(1)
    ) {
      array_push(
        $dangtuvan,
        HocSinh::where('trangthai', 'Đang tư vấn')
          ->whereMonth('updated_at', $date->month)
          ->count()
      );
      array_push(
        $hocthu,
        HocSinh::where('trangthai', 'Học thử')
          ->whereMonth('updated_at', $date->month)
          ->count()
      );
      array_push(
        $chinhthuc,
        HocSinh::where('trangthai', 'Chính thức')
          ->whereMonth('updated_at', $date->month)
          ->count()
      );
    }
    return [
      'dangtuvan' => $dangtuvan,
      'hocthu' => $hocthu,
      'chinhthuc' => $chinhthuc,
    ];
  }

  public function thongKeChiTieuNam($time)
  {
    $thu = [];
    $chi = [];
    $ngaydaunam = $time->copy()->startOfYear();
    $ngaycuoinam = $time->copy()->endOfYear();
    for (
      $date = $ngaydaunam->copy();
      $date->lt($ngaycuoinam);
      $date->addMonth(1)
    ) {
      $tongthu = $this->tongThuThang($date);
      $tongchi = $this->tongChiThang($date);
      array_push($thu, $tongthu);
      array_push($chi, $tongchi);
    }
    return ['thu' => $thu, 'chi' => $chi];
  }

  public function tongThuThang($thang)
  {
    return KhoanThu::whereYear('updated_at', '=', $thang->year)
      ->whereMonth('updated_at', '=', $thang->month)
      ->where('trangthai', 'Đã hoàn thành')
      ->get()
      ->sum('sotien');
  }

  public function tongChiThang($thang)
  {
    return PhieuChi::whereYear('updated_at', '=', $thang->year)
      ->whereMonth('updated_at', '=', $thang->month)
      ->get()
      ->sum('sotien');
  }

  public static function taoUser($table)
  {
    $id = DB::select("SHOW TABLE STATUS LIKE '$table'");
    $next_id = $id[0]->Auto_increment;

    $vaitro = [
      'hoc_sinh' => '2',
      'giao_vien' => '3',
      'nhan_vien' => '4',
    ];

    $user = User::create([
      'name' => str_replace('_', '', $table) . sprintf("%04d", $next_id),
      'password' => bcrypt('123456'),
      'role_id' => $vaitro[$table],
      'trangthai' => 'Hoạt động',
      'anhdaidien' =>
        "https://robohash.org/" .
        bin2hex(random_bytes(20)) .
        "?set=set4&bgset=&size=400x400",
    ]);

    return $user->id;
  }
}