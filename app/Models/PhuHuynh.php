<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhuHuynh extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'phu_huynh';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'cmnd',
        'hodem',
        'ten',
        'email',
        'sodienthoai',
        'ngaysinh',
        'gioitinh',
        'diachi',
        'user_phu_huynh_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function dsHocSinh()
    {
        return $this->hasMany(HocSinh::class);
    }
}
