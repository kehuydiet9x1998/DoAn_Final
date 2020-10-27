<?php

namespace App\Http\Controllers\Administrators;

use App\Http\Controllers\Controller;
use App\Models\BaiGiang;
use App\Models\BaiTap;
use Illuminate\Http\Request;

class BaiTapController extends Controller
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
    if ($request->hasFile('hinhanhbaitap')) {
      // return $request;
      $path = $request->file('hinhanhbaitap')->store('hinhanhbaitap');
      $request['hinhanhminhhoa'] = $path;
      $data = $request->all();
      // return $data;
      BaiTap::create($data);
      return back();
    } else {
      $data = $request->all();
      BaiTap::create($data);
    }
    return back();
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\BaiTap  $baiTap
   * @return \Illuminate\Http\Response
   */
  public function show(BaiTap $baiTap)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\BaiTap  $baiTap
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $baitap = BaiTap::find($id);
    $khoahocid = BaiTap::find($id)->baiGiang->khoaHoc->id;
    $baigiangs = BaiGiang::where('khoa_hoc_id', $khoahocid)->get();
    return view('backend.administrators.courses.edit_baitap_modal', [
      'baitap' => $baitap,
      'baigiangs' => $baigiangs,
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\BaiTap  $baiTap
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $baitap = BaiTap::findOrFail($id);
    if ($request->hasFile('hinhanhbaitap')) {
      $path = $request->file('hinhanhbaitap')->store('hinhanhbaitap');
      $request['hinhanhminhhoa'] = $path;
      $baitap->fill($request->all());
      $baitap->save();
    } else {
      $baitap->fill($request->all());
      $baitap->save();
    }
    return back();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\BaiTap  $baiTap
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    BaiTap::where('id', $id)->delete();
    return back();
  }
}