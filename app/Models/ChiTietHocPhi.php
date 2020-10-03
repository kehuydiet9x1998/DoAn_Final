<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChiTietHocPhi extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'chi_tiet_hoc_phi';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'tenkhoanthu',
        'sotien',
        'sotiendong',
        'hoc_phi_id',
        'khoa_hoc_id',
    ];

    public function hocPhi()
    {
        return $this->belongsTo(HocPhi::class);
    }

    public function khoaHoc()
    {
        return $this->belongsTo(KhoaHoc::class);
    }
}
