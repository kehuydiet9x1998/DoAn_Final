<?php

namespace App\Http\Controllers\Administrators;

use App\Http\Controllers\Controller;
use App\Models\PhanLop;
use Illuminate\Http\Request;

class PhanLopController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    return $request->all();
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\PhanLop  $phanlop
   * @return \Illuminate\Http\Response
   */
  public function show(PhanLop $phanlop)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\PhanLop  $phanlop
   * @return \Illuminate\Http\Response
   */
  public function edit(PhanLop $phanlop)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\PhanLop  $phanlop
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, PhanLop $phanlop)
  {
    return $request->all();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\PhanLop  $phanlop
   * @return \Illuminate\Http\Response
   */
  public function destroy(PhanLop $phanlop)
  {
    $phanlop->delete();
    return back();
  }
}