<?php

namespace App\Http\Controllers\Administrators;

use App\Http\Controllers\Controller;
use App\Models\HocCu;
use App\Models\KhoHocCu;
use App\Models\LopHoc;
use Illuminate\Http\Request;

class PlusHocCuController extends Controller
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
      $khc = KhoHocCu::findOrFail($request->kho_hoc_cu_id);
      $khc->capphat += $request->soluong;
      $hc = HocCu::firstOrNew(['kho_hoc_cu_id' => $khc->id, 'lop_hoc_id' => $request->lop_hoc_id]);
      $hc->soluong += $request->soluong;
      $hc->tenthietbi = $khc->tenhoccu;
      $hc->hinhanhthietbi = $khc->hinhanhhoccu;
      $hc->trangthai = '';
      $sl = $request->soluong;
      $ten = $khc->tenhoccu;
      $lop = $hc->lopHoc->tenlop;

      if($khc->capphat <= $khc->soluong) {
        $khc->save();
        $hc->save();
        session()->flash('success-message', "Đã thêm $sl $ten vào lớp $lop");

      }
      session()->flash('error-message', 'Không có đủ số lượng trong kho');

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
    $khohoccu = KhoHocCu::find($id);
    return view('backend.administrators.hoccu.plus_hoccu_modal',
      compact('khohoccu'));
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

    $khohoccu = KhoHocCu::findOrFail($id);
    $khohoccu->soluong  += $request->soluong;
    $khohoccu->save();
    return redirect(route('admin-hoccu.index'));
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
