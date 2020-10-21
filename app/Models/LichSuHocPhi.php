<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LichSuHocPhi extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'lich_su_hoc_phi';
    protected $dates =['delete_at'];
    protected $fillable = [
      'sotiencandong',
      'sotiendadong',
      'sotienconthieu',
      'ngaydong',
      'hoc_phi_id',
      'nhan_vien_id',
    ];
    public function hocPhi(){
      return $this->belongsTo(HocPhi::class);
    }
    public function nhanVien(){
      return $this->belongsTo(NhanVien::class);
    }

//    public function getSotienconthieuAttribute($value){
//      return number_format($value). ' VNĐ';
//    }
//
//  public function getSotiendadongAttribute($value){
//    return number_format($value). ' VNĐ';
//  }
//
//  public function getSotiencandongAttribute($value){
//    return number_format($value). ' VNĐ';
//  }
//
//  public function getNgaydongAttribute($value){
//    return date('d-m-Y', strtotime($value));
//  }
}
