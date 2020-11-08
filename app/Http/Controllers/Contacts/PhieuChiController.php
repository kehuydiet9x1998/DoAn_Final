<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Models\PhieuChi;
use Illuminate\Http\Request;

class PhieuChiController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $phieuchis = PhieuChi::all();
    return view(
      'backend.contact.phieuchi.list-phieu-chi',
      compact('phieuchis')
    );
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $data = $request->all();
    $data['ngaytao'] = date('Y/m/d');
    $data['sotien'] = str_replace(',', '', $request['sotien']);
    // $data['nhan_vien_id'] = auth()->user()->id;
    PhieuChi::create($data);
    return back();
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\PhieuChi  $phieuChi
   * @return \Illuminate\Http\Response
   */
  public function show(PhieuChi $phieuChi)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\PhieuChi  $phieuChi
   * @return \Illuminate\Http\Response
   */
  public function edit(PhieuChi $phieuChi)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\PhieuChi  $phieuChi
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, PhieuChi $phieuChi)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\PhieuChi  $phieuChi
   * @return \Illuminate\Http\Response
   */
  public function destroy(PhieuChi $phieuChi)
  {
    //
  }
}
