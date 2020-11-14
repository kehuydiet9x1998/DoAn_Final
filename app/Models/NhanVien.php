<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NhanVien extends Model
{
  use HasFactory;
  use SoftDeletes;
  protected $table = 'nhan_vien';
  protected $dates = ['deleted_at'];
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
    'chuc_vu_id',
    'user_id',
  ];

  public function getNgaysinhAttribute($value)
  {
    return date('d/m/Y', strtotime($value));
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function chucVu()
  {
    return $this->belongsTo(ChucVu::class);
  }

  public function dsHocPhi()
  {
    return $this->hasMany(HocPhi::class);
  }

  public function hopDong()
  {
    return $this->hasOne(HopDong::class);
  }

  public function dsLuong()
  {
    return $this->hasMany(Luong::class);
  }

  public function dsKhenThuongKyLuat()
  {
    return $this->hasMany(KhenThuongKyLuat::class);
  }

  public function dsPhieuChi()
  {
    return $this->hasMany(PhieuChi::class);
  }

  public function layLuongThang($thang)
  {
    $luong = Luong::all()->filter(function ($query) use ($thang) {
      $temp = date('Y-m', strtotime($query->thang));
      return $temp == $thang && $query->nhan_vien_id == $this->id;
    });
    return $luong->first();
  }

  public function layTongSoNgay($thang)
  {
    $checkins = Checkin::all()->filter(function ($query) use ($thang) {
      $temp = date('Y-m', strtotime($query->ngaycham));
      return $temp == $thang && $query->nhan_vien_id == $this->id;
    });

    $comat = $checkins
      ->filter(function ($query) {
        return $query->ketqua == "Có mặt";
      })
      ->count();

    $vang = $checkins
      ->filter(function ($query) {
        return $query->ketqua == "Vắng";
      })
      ->count();

    $muon = $checkins
      ->filter(function ($query) {
        return $query->ketqua == "Muộn";
      })
      ->count();

    $nuangay = $checkins
      ->filter(function ($query) {
        return $query->ketqua == "Nửa ngày";
      })
      ->count();

    return [
      'comat' => $comat,
      'vangmat' => $vang,
      'muon' => $muon,
      'nuangay' => $nuangay,
      'tong' => round($comat + 0.7 * $muon + 0.5 * $nuangay, 1),
    ];
  }

  public function layChamCongTheoNgay($date)
  {
    $checkins = Checkin::all();
    $checkin_record = $checkins->filter(function ($query) use ($date) {
      return date('d-m-Y', strtotime($query->ngaycham)) ==
        $date->format('d-m-Y') &&
        $query->nhan_vien_id == $this->id &&
        $query->trangthai == 'Đã chấm công';
    });

    if ($checkin_record->count() > 0) {
      // echo $checkin_record->first();

      switch ($checkin_record->first()->ketqua) {
        case "Vắng":
          return "A";
        case "Có mặt":
          return "P";
        case "Nửa ngày":
          return "H";
        case "Muộn":
          return "L";
      }
    }
    return null;
  }
}