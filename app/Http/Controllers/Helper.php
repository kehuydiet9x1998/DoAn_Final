<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\LengthAwarePaginator;

class Helper
{
  public static function getData($collection, $perpage)
  {
    foreach (request()->query() as $key => $value) {
      if (
        isset($key, $value) &&
        $key != 'sort_by' &&
        $key != 'desc' &&
        $key != 'page'
      ) {
        $collection = $collection->where($key, 'like', "$value");
      }
    }
    $collection = $collection->get();
    $page = LengthAwarePaginator::resolveCurrentPage();

    $results = $collection->slice(($page - 1) * $perpage, $perpage)->values();

    $paginated = new LengthAwarePaginator(
      $results,
      $collection->count(),
      $perpage,
      $page,
      [
        'path' => LengthAwarePaginator::resolveCurrentPath(),
      ]
    );
    $paginated->appends(request()->all());
    return $paginated;
  }
}
