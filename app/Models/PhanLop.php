<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhanLop extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'phan_lop';
    protected $dates = ['deleted_at'];
    protected $fillable = ['ngayvaolop', 'hoc_sinh_id', 'lop_hoc_id'];

    public function hocSinh()
    {
        return $this->belongsTo(HocSinh::class);
    }

    public function lopHoc()
    {
        return $this->belongsTo(LopHoc::class);
    }
}
