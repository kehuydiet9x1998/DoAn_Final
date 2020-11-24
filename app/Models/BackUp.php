<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BackUp extends Model
{
  use HasFactory;
  use SoftDeletes;
  protected $table = 'back_up';
  protected $dates = ['deleted_at'];
  protected $fillable = ['tenfile', 'ngaytao', 'dungluong'];
}
