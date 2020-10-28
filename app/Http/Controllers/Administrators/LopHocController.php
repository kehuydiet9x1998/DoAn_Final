<?php

namespace App\Http\Controllers\Administrators;

use App\Http\Controllers\Controller;
use App\Models\CaHoc;
use Illuminate\Http\Request;
use App\Models\LopHoc;
use App\Models\KhoaHoc;
use App\Models\GiaoVien;
use App\Models\HocSinh;
use App\Models\PhongHoc;
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
    $phonghocs = PhongHoc::all();
    $cahocs = CaHoc::all();
    return view(
      'backend.administrators.classes.classes',
      compact('lophocs', 'khoahocs', 'giangviens', 'cahocs', 'phonghocs')
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
    $lophoc = LopHoc::create($data);

    foreach ($request['thu'] as $thu) {
      $lophoc->lichHoc()->create([
        'phong_hoc_id' => $request->phong_hoc_id,
        'thu' => $thu,
        'ca_hoc_id' => $request->ca_hoc_id,
      ]);
    }

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
    $class = LopHoc::find($id);
    $hocsinhs = HocSinh::all();
    $classes = LopHoc::all();
    return view(
      'backend.administrators.classes.class_detail',
      compact('class', 'hocsinhs', 'classes')
    );
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
    $cahocs = CaHoc::all();
    $phonghocs = PhongHoc::all();

    return view(
      'backend.administrators.classes.edit-class',
      compact('lophoc', 'khoahocs', 'giangviens', 'cahocs', 'phonghocs')
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
    // return $request->all();
    $lophoc = LopHoc::find($id);
    $lophoc->fill($request->except('thu'));
    $lophoc->lichHoc()->delete();
    $lophoc->save();

    foreach ($request['thu'] as $thu) {
      $lophoc->lichHoc()->create([
        'phong_hoc_id' => $request->phong_hoc_id,
        'thu' => $thu,
        'ca_hoc_id' => $request->ca_hoc_id,
      ]);
    }

    return back();
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