<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Level extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'level';
    protected $fillable = ['tenlevel', 'mota'];
    protected $dates = ['deleted_at'];

    public function dsKhoaHoc()
    {
        return $this->hasMany(KhoaHoc::class);
    }
}
