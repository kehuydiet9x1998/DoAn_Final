<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Models\HocSinh;
use App\Models\LichTraiNghiem;
use Carbon\Carbon;
use Illuminate\Http\Request;
use JsValidator;
use LaravelFullCalendar\Facades\Calendar;

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
    foreach (LichTraiNghiem::all() as $ltn){
      $time = new Carbon($ltn->thoigian);
      $now = Carbon::now();
      if($time->isPast() and $time->diffInDays($now) > 1 and $ltn->trangthai == 'Chưa xử lý'){
        $ltn->trangthai = 'Hủy bỏ';
        $ltn->ketqua = 'Không đạt';
        $ltn->save();
      }
    }
    $allhocsinhs = HocSinh::all();
    $data = LichTraiNghiem::orderBy('thoigian', 'desc')->get();
    $events = [];
    foreach ($data as $dt){
      $time = new Carbon($dt->thoigian);
      if ($dt->ketqua == "Đạt")
        $events[] = ['title' => 'Họ tên: '.$dt->hocsinh->hodem.' '.$dt->hocsinh->ten.' -> '.$dt->ketqua,
          'start'=>$time->toDateString().'T'.$time->toTimeString(),'color'=>'#35DD07'];
      elseif ($dt->ketqua == "Không đạt")
        $events[] = ['title' => 'Họ tên: '.$dt->hocsinh->hodem.' '.$dt->hocsinh->ten.' -> '.$dt->ketqua,
          'start'=>$time->toDateString().'T'.$time->toTimeString(),'color'=>'#E99C0C'];
      else
        $events[] = ['title' => 'Họ tên: '.$dt->hocsinh->hodem.' '.$dt->hocsinh->ten. ' - SĐT: '. $dt->hocsinh->sodienthoai. ' - Nội dung: '.$dt->noidung,
          'start'=>$time->toDateString().'T'.$time->toTimeString()];
    }
    return view('backend.contact.lichtrainghiem.listlichtrainghiem', [
      'lichtrainghiems' => $data,
      'allhocsinhs' => $allhocsinhs,
      'events'=>$events,
    ])->with(['jsValidator' => $this->jsValidator]);
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
