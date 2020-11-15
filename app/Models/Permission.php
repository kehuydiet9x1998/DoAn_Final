<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
  use HasFactory;

  protected $guarded = [];

  public function roles()
  {
    return $this->belongsToMany(Roles::class, 'role_permission');
  }

  public function permissionGroup()
  {
    return $this->belongsTo(Permission::class);
  }
}