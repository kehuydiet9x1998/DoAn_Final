<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Models\HocSinh;
use App\Models\LichTraiNghiem;
use Illuminate\Http\Request;

class LichTraiNghiemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allhocsinhs = HocSinh::all()->sortByDesc('id');
        $data = LichTraiNghiem::all();
        return view('backend.contact.lichtrainghiem.listlichtrainghiem',['hocsinhs'=>$data,'allhocsinhs'=>$allhocsinhs]);
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
        $data = $request -> all();
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
        return view('backend.contact.lichtrainghiem.show_lichtrainghiem_modal', ['hocsinh' => $data]);
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
        return view('backend.contact.lichtrainghiem.edit_lichtrainghiem_modal', ['hocsinh' => $data]);
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
        $data->fill($request-> all());
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
        LichTraiNghiem::where('id','=',$id)->delete();
        return redirect(route('lichtrainghiem.index'));
    }
}
