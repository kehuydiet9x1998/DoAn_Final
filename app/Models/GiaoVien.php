<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiaoVien extends Model
{
    use HasFactory;
    protected static function boot()
    {
        parent::boot();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function dsBuoiHoc()
    {
        return $this->hasMany(BuoiHoc::class);
    }

    public static function layDanhSach()
    {
        return NhanVien::whereHas('chucVu', function (Builder $query) {
            $query->where('ten', 'like', 'Giảng viên');
        })->get();
    }
}
