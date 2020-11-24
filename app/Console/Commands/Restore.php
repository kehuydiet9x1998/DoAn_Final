<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Restore extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'db:restore {--filename=}';

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

    // $path = database_path() . $ds . 'backups' . $ds;

    // $file = date('Y-m-d-His', $ts) . '-backup-' . $database . '.sql';

    $filename = $this->option('filename');

    $command = sprintf(
      'mysql -h %s -u %s %s < %s',
      $host,
      $username,
      $database,
      $filename
    );

    exec($command);
  }
}