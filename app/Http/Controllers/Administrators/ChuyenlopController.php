<?php

namespace App\Http\Controllers\Administrators;

use App\Http\Controllers\Controller;
use App\Models\HocSinh;
use App\Models\KhoaHoc;
use App\Models\LopHoc;
use App\Models\PhanLop;
use Illuminate\Http\Request;

class ChuyenlopController extends Controller
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
        $data = $request->except('lop_hoc_id-cu');
        $hocsinh = HocSinh::find($request['hoc_sinh_id']);
        $class = LopHoc::find($request['lop_hoc_id']);
        $khoahoc = KhoaHoc::find($class->khoa_hoc_id);
        if($class->siso < $khoahoc->sisotoida) {
          PhanLop::create($data);
          $class->siso = PhanLop::where('lop_hoc_id', $request['lop_hoc_id'])->count();
          $class->save();
          $lophoc = PhanLop::find($request['lop_hoc_id-cu']);
          $oldclass = LopHoc::find($lophoc->lop_hoc_id);
          $lophoc->delete();
          $oldclass->siso = PhanLop::where('lop_hoc_id', $lophoc->lop_hoc_id)->count();
          $oldclass->save();
          session()->flash('success-message', "Đã chuyển $hocsinh->hodem $hocsinh->ten từ lớp $oldclass->tenlop sang $class->tenlop");
        }
        else
          session()->flash('error-message', 'Quá sĩ số tối đa..!');
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
        $lophoc = PhanLop::find($id);
        $listclass = LopHoc::all();
        return view('backend.administrators.classes.chuyen_lop_modal',compact('lophoc','listclass'));
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
