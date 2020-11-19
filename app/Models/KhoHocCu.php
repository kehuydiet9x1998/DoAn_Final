<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KhoHocCu extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'kho_hoc_cu';
    protected $dates = ['deleted_at'];
    protected $fillable = [
      'tenhoccu',
      'hinhanhhoccu',
      'soluong',
      'capphat',

    ];

    public function dshoccu(){
      return $this->hasMany(HocCu::class, 'kho_hoc_cu_id', 'id');
    }
}
