<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KhoanThu extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='khoan_thu';
    protected $dates = ['deleted_at'];
    protected $fillable=[
      'tenkhoanthu',
      'sotien',
      'trangthai',
    ];

    //cái này nó như kiểu lẻ lẻ ấy liên kết thì thừa thãi dữ liệu lắm mai t giỉai thích cho cai này ko lần liên kết đâu
}
