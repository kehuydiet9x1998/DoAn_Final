<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NghiPhep extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'nghi_phep';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'lydo',
        'trangthai',
        'ghichu',
        'hoc_sinh_id',
        'buoi_hoc_id',
    ];

    public function hocSinh()
    {
        return $this->belongsTo(HocSinh::class);
    }

    public function buoiHoc()
    {
        return $this->belongsTo(BuoiHoc::class);
    }
}
