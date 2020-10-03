<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LichTraiNghiem extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'lich_trai_nghiem';
    protected $dates = ['deleted_at'];
    protected $fillable = ['thoigian', 'trangthai', 'ghichu', 'hoc_sinh_id'];

    public function hocSinh()
    {
        return $this->belongsTo(HocSinh::class);
    }
}
