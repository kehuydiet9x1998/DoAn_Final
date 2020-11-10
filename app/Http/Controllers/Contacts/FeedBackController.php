<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\NhanXet;
use App\Models\NhanXetGiaoVien;
use App\Models\NhanXetKhoaHoc;
use Illuminate\Support\Facades\DB;

class FeedBackController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $nhanxetkhoahoc = NhanXetKhoaHoc::all();
    $nhanxetgiaovien = NhanXetGiaoVien::all();
    return view('backend.contact.nhanxet.list_nhanxet', ['nhanxetkhoahoc' => $nhanxetkhoahoc, 'nhanxetgiaovien' => $nhanxetgiaovien]);
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
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $nhanXet = NhanXetKhoaHoc::findOrFail($id);
    return view('backend.contact.nhanxet.modal', compact('nhanXet'));
    // return 'ok';
  }
  public function nhanxetgiaovien($id)
  {
    $nhanXet = NhanXetGiaoVien::findOrFail($id);
    return view('backend.contact.nhanxet.nhanxetgiaovien', compact('nhanXet'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit(NhanXet $nhanXet)
  {

    return view('backend.contact.modal', compact('nhanXet'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}