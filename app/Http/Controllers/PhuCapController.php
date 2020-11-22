<?php

namespace App\Http\Controllers;

use App\Models\PhuCap;
use Illuminate\Http\Request;

class PhuCapController extends Controller
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
    PhuCap::create($request->all());
    return back();
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\PhuCap  $phucap
   * @return \Illuminate\Http\Response
   */
  public function show(PhuCap $phucap)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\PhuCap  $phucap
   * @return \Illuminate\Http\Response
   */
  public function edit(PhuCap $phucap)
  {
    return view('backend.administrators.edit_phu_cap', compact('phucap'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\PhuCap  $phucap
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, PhuCap $phucap)
  {
    $phucap->fill($request->all());
    $phucap->save();
    return back();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\PhuCap  $phucap
   * @return \Illuminate\Http\Response
   */
  public function destroy(PhuCap $phucap)
  {
    $phucap->delete();
    return back();
  }
}