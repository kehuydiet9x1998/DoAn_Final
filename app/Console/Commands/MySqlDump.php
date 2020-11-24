<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MySqlDump extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'db:backup {--filename=}';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Runs the mysqldump utility using info from .env';

  /**
   * Execute the console command.
   *
   * @return mixed
   */
  public function handle()
  {
    $ds = DIRECTORY_SEPARATOR;

    $host = env('DB_HOST');
    $username = env('DB_USERNAME');
    $password = env('DB_PASSWORD');
    $database = env('DB_DATABASE');

    $ts = time();

    $path = public_path() . $ds;

    $file = date('Y-m-d-His', $ts) . '-backup-' . $database . '.sql';

    $filename = $this->option('filename')
      ? $this->option('filename')
      : $path . $file;

    $command = sprintf(
      'mysqldump -h %s -u %s %s > %s --ignore-table=teky.back_up',
      $host,
      $username,
      $database,
      $filename
    );

    // var_dump($command);
    if (!is_dir($path)) {
      mkdir($path, 0755, true);
    }

    exec($command);
  }
}