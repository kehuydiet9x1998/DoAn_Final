<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  use HasFactory;

  protected $guarded = ['proengsoft_jsvalidation'];

  // public function getTenAttribute($value)
  // {
  //   return strtoupper($value);
  // }

  public function permissions()
  {
    return $this->belongsToMany(Permission::class, 'role_permission');
  }

  public function users()
  {
    return $this->hasMany(User::class);
  }

  public function hasPermission(Permission $permission)
  {
    return !!optional($this->permissions)->contains($permission);
  }
}
