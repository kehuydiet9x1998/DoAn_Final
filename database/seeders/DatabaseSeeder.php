<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use bfinlay\SpreadsheetSeeder\SpreadsheetSeeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends SpreadsheetSeeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    DB::statement('SET FOREIGN_KEY_CHECKS = 0');

    $tableNames = Schema::getConnection()
      ->getDoctrineSchemaManager()
      ->listTableNames();

    foreach ($tableNames as $name) {
      if ($name == 'migrations') {
        continue;
      }
      DB::table($name)->truncate();
    }

    $this->file = ['/database/seeders/_seeder.xlsx'];
    $this->truncate = false;
    parent::run();
  }
}