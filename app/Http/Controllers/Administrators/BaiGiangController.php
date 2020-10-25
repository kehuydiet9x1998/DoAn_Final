<?php

namespace App\Http\Controllers\Administrators;

use App\Http\Controllers\Controller;
use App\Models\BaiGiang;
use Illuminate\Http\Request;

class BaiGiangController extends Controller
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
    $tenfile = $request->file('filebaigiang')->store('baigiang');
    $data = $request->all();
    $data['filebaigiang'] = $tenfile;
    BaiGiang::create($data);
    return back();
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\BaiGiang  $baiGiang
   * @return \Illuminate\Http\Response
   */
  public function show(BaiGiang $baiGiang)
  {
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\BaiGiang  $baiGiang
   * @return \Illuminate\Http\Response
   */
  public function edit(BaiGiang $baiGiang)
  {
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\BaiGiang  $baiGiang
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, BaiGiang $baiGiang)
  {
    return $request->file('filebaigiang');
    $baiGiang->fill($request->all());
    $baiGiang->save();
    return back();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\BaiGiang  $baiGiang
   * @return \Illuminate\Http\Response
   */
  public function destroy(BaiGiang $baiGiang)
  {
    $baiGiang->delete();
    return back();
  }
}