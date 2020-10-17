<?php

namespace App\Http\Controllers\administrators;

use App\Http\Controllers\Controller;
use App\Models\GiaoVien;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $teacher = GiaoVien::orderBy('ten','ASC') ->paginate(10);
        $teacher = GiaoVien::all();
        return view('backend.administrators.teacher.teacher' , ['teachers' => $teacher]);
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
        $data = $request-> all();
        GiaoVien::create($data);
        return redirect(route('teachers.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GiaoVien  $giaoVien
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = GiaoVien::findorFail($id);
        return view('backend.administrators.teacher.show_teacher',['teachers'=>$data]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GiaoVien  $giaoVien
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = GiaoVien::findorFail($id);
        return view('backend.administrators.teacher.edit_teacher', ['teachers' => $data]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GiaoVien  $giaoVien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = GiaoVien::find($id);
        $data->fill($request -> all());
        $data->save();
        return redirect(route('teachers.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GiaoVien  $giaoVien
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        GiaoVien::where('id','=',$id)->delete();
        return redirect(route('teachers.index'));
    }
}