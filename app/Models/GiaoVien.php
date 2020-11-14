<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Query\Builder as QueryBuilder;

use Illuminate\Database\Eloquent\Collection;

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

  public function getNgaysinhAttribute($value)
  {
    return date('d/m/Y', strtotime($value));
  }

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
  public function dsNhanXet()
  {
    return $this->hasMany(NhanXetGiaoVien::class);
  }

  public function layLuongThang($thang)
  {
    $luong = Luong::all()->filter(function ($query) use ($thang) {
      $temp = date('Y-m', strtotime($query->thang));
      return $temp == $thang && $query->giao_vien_id == $this->id;
    });
    return $luong->first();
  }

  public function tongGioLam($thang)
  {
    $checkins = Checkin::all()->filter(function ($query) use ($thang) {
      $temp = date('Y-m', strtotime($query->giocheckout));
      return $temp == $thang;
    });

    $temp = $checkins->filter(function ($query) use ($thang) {
      return $query->giao_vien_id == $this->id &&
        $thang ==
          date('Y-m', strtotime($query->getRawOriginal('giocheckout'))) &&
        $query->trangthai == 'Đã xác nhận';
    });
    $sum = $temp->sum(function ($query) {
      $giocheckout = Carbon::createFromFormat(
        'Y-m-d H:i:s',
        $query->getRawOriginal('giocheckout')
      );
      $giocheckin = Carbon::createFromFormat(
        'Y-m-d H:i:s',
        $query->getRawOriginal('giocheckin')
      );
      return $giocheckout->diffInMinutes($giocheckin);
    });

    return round($sum, 1);
  }

  public function tongGioLamTheoNgay($date)
  {
    $checkins = Checkin::all();
    $checkin_record = $checkins->filter(function ($query) use ($date) {
      return date('d-m-Y', strtotime($query->getRawOriginal('giocheckin'))) ==
        $date->format('d-m-Y') &&
        $query->giao_vien_id == $this->id &&
        $query->trangthai == 'Đã xác nhận';
    });

    $time = 0;
    if ($checkin_record->count() > 0) {
      foreach ($checkin_record as $item) {
        $giocheckout = Carbon::createFromFormat('H:i', $item->giocheckout);
        $giocheckin = Carbon::createFromFormat('H:i', $item->giocheckin);
        $time += $giocheckout->diffInMinutes($giocheckin);
      }
      return $time;
    }
    return 0;
  }
}