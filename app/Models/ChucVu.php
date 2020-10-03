<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChucVu extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'chuc_vu';
    protected $dates = ['deleted_at'];
    protected $fillable = ['ten', 'mota', 'hesoluong'];

    public function dsNhanVien()
    {
        return $this->hasMany(NhanVien::class);
    }
}
