<?php

namespace App\Http\Controllers\Administrators;

use App\Http\Controllers\Controller;
use App\Models\LoaiGiaoVien;
use Illuminate\Http\Request;
use JsValidator;

class LoaiGiaoVienController extends Controller
{
  protected $validationRules = [
    'ten' => 'required',
    'mota' => 'required',
    'luongchinh' => 'required',
  ];
  protected $attributes = [
    'ten' => 'Tên chức vụ',
    'mota' => 'Mô tả',
    'luongchinh' => 'Lương chính',
  ];

  public function __construct()
  {
    $this->jsValidator = JsValidator::make(
      $this->validationRules,
      [],
      $this->attributes
    );
  }
  public function index()
  {
    $this->authorize('tv_danhmuc');
    $loaigiaoviens = LoaiGiaoVien::all();
    return view(
      'backend.administrators.loaigiaovien.loaigiaovien',
      compact('loaigiaoviens')
    )->with(['jsValidator' => $this->jsValidator]);
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
    $this->authorize('them_danhmuc');

    $data = $request->all();
    LoaiGiaoVien::create($data);
    return redirect(route('admin-loaigiaovien.index'));
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $loaigiaovien = LoaiGiaoVien::find($id);
    return view(
      'backend.administrators.loaigiaovien.edit_loaigiaovien__modal',
      compact('loaigiaovien')
    )->with(['jsValidator' => $this->jsValidator]);
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
    $this->authorize('sua_danhmuc');

    $loaigiaovien = LoaiGiaoVien::findOrFail($id);
    $loaigiaovien->fill($request->all());
    $loaigiaovien->save();
    return redirect(route('admin-loaigiaovien.index'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $this->authorize('xoa_danhmuc');

    LoaiGiaoVien::where('id', '=', $id)->delete();
    return redirect(route('admin-loaigiaovien.index'));
  }
}