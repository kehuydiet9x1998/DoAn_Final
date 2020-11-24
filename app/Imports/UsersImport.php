<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
  public function headingRow(): int
  {
    return 1;
  }

  public $count = 0;

  public function model(array $row)
  {
    $this->count++;
    return new User([
      'name' => $row['name'],
      'password' => bcrypt($row['password']),
      'role_id' => $row['role_id'],
      'trangthai' => 'Hoạt động',
      'anhdaidien' =>
        "https://robohash.org/" .
        bin2hex(random_bytes(20)) .
        "?set=set4&bgset=&size=400x400",
    ]);
  }
}