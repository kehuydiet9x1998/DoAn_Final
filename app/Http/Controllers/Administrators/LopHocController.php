<?php

namespace App\Http\Controllers\Administrators;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LopHoc;
use App\Models\KhoaHoc;
use App\Models\GiaoVien;
use Illuminate\Support\Facades\DB;
use JsValidator;

class LopHocController extends Controller
{
  protected $validationRules = [
    'tenlop' => 'required|max:255',
    'ngaybatdau' => 'required|date',
    'ngayketthuc' => 'required|date',
    'siso' => 'required|numeric|max:10',
    'sobuoi' => 'required|numeric|max:12',
  ];
  protected $attributes = [
    'tenlop' => 'Tên lớp',
    'ngaybatdau' => 'Ngày bắt đầu',
    'ngayketthuc' => 'Ngày kết thúc',
    'siso' => 'Sĩ số',
    'sobuoi' => 'Số buổi',
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
    $lophocs = LopHoc::all();
    $khoahocs = KhoaHoc::all();
    $giangviens = GiaoVien::all();
    return view(
      'backend.administrators.classes.classes',
      compact('lophocs', 'khoahocs', 'giangviens')
    )->with(['jsValidator' => $this->jsValidator]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
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
    $data['trangthai'] = 'Chưa diễn ra';
    $data['sobuoidahoc'] = 0;
    LopHoc::create($data);
    return back();
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $lophoc = LopHoc::find($id);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $lophoc = LopHoc::find($id);
    $khoahocs = KhoaHoc::all();
    $giangviens = GiaoVien::all();
    return view(
      'backend.administrators.classes.show-class',
      compact('lophoc', 'khoahocs', 'giangviens')
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
    LopHoc::where('id', '=', $id)->delete();
    return redirect(route('allclass.index'));
  }
}
