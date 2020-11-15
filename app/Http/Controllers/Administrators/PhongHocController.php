<?php

namespace App\Http\Controllers\Administrators;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PhongHoc;
use JsValidator;

class PhongHocController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  protected $validationRules = [
    'tenphong' => 'required',
    'mota' => 'required',
    'trangthai' => 'required',
  ];
  protected $attributes = [
    'tenphong' => 'Tên Phòng',
    'mota' => 'Mô tả',
    'trangthai' => 'Trạng thái phòng học',
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

    $phonghoc = PhongHoc::all();
    return view(
      'backend.administrators.room.classroom',
      compact('phonghoc')
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
    PhongHoc::create($data);
    return redirect(route('classroom.index'));
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $phonghoc = PhongHoc::findOrFail($id);
    return view('backend.administrators.room.show_room_modal', [
      'phonghoc' => $phonghoc,
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $room = PhongHoc::find($id);
    return view('backend.administrators.room.edit_room_modal', [
      'room' => $room,
    ])->with(['jsValidator' => $this->jsValidator]);
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

    $room = PhongHoc::findOrFail($id);
    $room->fill($request->all());
    $room->save();
    return redirect(route('classroom.index'));
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

    PhongHoc::where('id', '=', $id)->delete();
    return redirect(route('classroom.index'));
  }
}