<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Models\HocPhi;
use App\Models\LichSuHocPhi;
use App\Models\KhoanThu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HocPhiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hocphi = HocPhi::all();
        $khoanthu = KhoanThu::all();
        return view('backend.contact.hocphi.ListHocPhi',compact('khoanthu','hocphi'));
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
        $data['sotienconthieu'] = $data['sotiencandong'] - $data['sotiendadong'];
        LichSuHocPhi::create($data);
        return redirect(route('hocphis.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HocPhi  $hocPhi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HocPhi  $hocPhi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hocphi = HocPhi::find($id);
        $khoanthu = KhoanThu::all();
        $lsthu =  LichSuHocPhi::all()->where('hoc_phi_id',$id);
        $sotiencandong = LichSuHocPhi::where('hoc_phi_id',$id)->orderBy('created_at', 'desc')->first()->sotienconthieu;
        return view('backend.contact.hocphi.Edit_HocPhi_Modal',
          ['hocphi'=>$hocphi,'khoanthu'=>$khoanthu,'lsthu'=>$lsthu, 'sotiencandong' => $sotiencandong]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HocPhi  $hocPhi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

      $hocphi = HocPhi::find($id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HocPhi  $hocPhi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HocPhi::Where('id','=',$id)->delete();
        return redirect(route('hocphis.index'));
    }
}
