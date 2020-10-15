<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Models\HocPhi;
use App\Models\HocSinh;
use App\Models\NhanVien;
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
        $hocsinhs = HocSinh::all()->sortByDesc('id');
        $nhanviens = NhanVien::all();
        $data = HocPhi::all();
        return view('backend.contact.hocphi.ListHocPhi',['hocphis'=>$data,'hocsinhs'=>$hocsinhs, 'nhanviens' => $nhanviens]);
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
        HocPhi::create($data);
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
        $data = HocPhi::findOrFail($id);
        return view('backend.contact.hocphi.Show_HocPhi_Modal', ['hocphi' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HocPhi  $hocPhi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = HocPhi::find($id);
        return view('backend.contact.hocphi.Edit_HocPhi_Modal', ['hocphi' => $data]);

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
        $data = HocPhi::find($id);
        $data->fill($request->all());
        $data -> save();
        return redirect(route('hocphis.index'));


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
