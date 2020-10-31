<?php

namespace App\Observers;

use App\Models\HocPhi;
use App\Models\HocSinh;

class HocSinhObserver
{
  /**
   * Handle the hoc sinh "created" event.
   *
   * @param  \App\Models\HocSinh  $hocSinh
   * @return void
   */
  public function created(HocSinh $hocSinh)
  {
    HocPhi::create(['hoc_sinh_id' => $hocSinh->id]);
  }

  /**
   * Handle the hoc sinh "updated" event.
   *
   * @param  \App\Models\HocSinh  $hocSinh
   * @return void
   */
  public function updated(HocSinh $hocSinh)
  {
    //
  }

  /**
   * Handle the hoc sinh "deleted" event.
   *
   * @param  \App\Models\HocSinh  $hocSinh
   * @return void
   */
  public function deleted(HocSinh $hocSinh)
  {
    //
  }

  /**
   * Handle the hoc sinh "restored" event.
   *
   * @param  \App\Models\HocSinh  $hocSinh
   * @return void
   */
  public function restored(HocSinh $hocSinh)
  {
    //
  }

  /**
   * Handle the hoc sinh "force deleted" event.
   *
   * @param  \App\Models\HocSinh  $hocSinh
   * @return void
   */
  public function forceDeleted(HocSinh $hocSinh)
  {
    //
  }
}