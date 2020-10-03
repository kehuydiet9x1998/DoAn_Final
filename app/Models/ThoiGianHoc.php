<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ThoiGianHoc extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'thoi_gian_hoc';
    protected $dates = ['deleted_at'];
    protected $fillable = ['lop_hoc_id', 'ca_hoc_id', 'thu'];

    public function lopHoc()
    {
        return $this->belongsTo(LopHoc::class);
    }

    public function caHoc()
    {
        return $this->belongsTo(CaHoc::class);
    }
}
