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
   * @param  \App\Models\BaiGiang  $baigiang
   * @return \Illuminate\Http\Response
   */
  public function show(BaiGiang $baigiang)
  {
    return view('showbaigiang', compact('baigiang'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\BaiGiang  $baigiang
   * @return \Illuminate\Http\Response
   */
  public function edit(BaiGiang $baigiang)
  {
    return view(
      'backend.administrators.courses.edit_baigiang',
      compact('baigiang')
    );
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\BaiGiang  $baigiang
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, BaiGiang $baigiang)
  {
    $baigiang->fill($request->except('filebaigiang'));
    if ($request->has('filebaigiang')) {
      $baigiang->filebaigiang = $request
        ->file('filebaigiang')
        ->store('baigiang');
    }
    $baigiang->save();
    return back();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\BaiGiang  $baigiang
   * @return \Illuminate\Http\Response
   */
  public function destroy(BaiGiang $baigiang)
  {
    $baigiang->delete();
    return back();
  }
}
