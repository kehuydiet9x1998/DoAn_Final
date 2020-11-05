<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Models\HocSinh;
use App\Models\LichTraiNghiem;
use Illuminate\Http\Request;
use JsValidator;

class LichTraiNghiemController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  protected $validationRules = [
    'hoc_sinh_id' => 'required',
    'thoigian' => 'required|date',
  ];
  protected $attributes = [
    'hoc_sinh_id' => 'Học sinh',
    'thoigian' => 'Ngày học',
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
    $allhocsinhs = HocSinh::all();
    $data = LichTraiNghiem::orderBy('thoigian', 'desc')->get();
    return view('backend.contact.lichtrainghiem.listlichtrainghiem', [
      'lichtrainghiems' => $data,
      'allhocsinhs' => $allhocsinhs,
    ])->with(['jsValidator' => $this->jsValidator]);
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
    $data = $request->all();
    $data['trangthai'] = 'Chưa xử lý';
    $data['ketqua'] = '';
    LichTraiNghiem::create($data);
    return redirect(route('lichtrainghiem.index'));
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\LichTraiNghiem  $lichTraiNghiem
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $data = LichTraiNghiem::find($id);
    return view('backend.contact.lichtrainghiem.show_lichtrainghiem_modal', [
      'lichtrainghiem' => $data,
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\LichTraiNghiem  $lichTraiNghiem
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $data = LichTraiNghiem::find($id);
    return view('backend.contact.lichtrainghiem.edit_lichtrainghiem_modal', [
      'lichtrainghiem' => $data,
    ])->with(['jsValidator' => $this->jsValidator]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\LichTraiNghiem  $lichTraiNghiem
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $data = LichTraiNghiem::find($id);
    $data->fill($request->all());
    $data->save();
    return redirect(route('lichtrainghiem.index'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\LichTraiNghiem  $lichTraiNghiem
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    LichTraiNghiem::where('id', '=', $id)->delete();
    return redirect(route('lichtrainghiem.index'));
  }
}
