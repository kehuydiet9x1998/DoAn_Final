<?php

namespace App\Http\Controllers\administrators;

use App\Http\Controllers\Controller;
use App\Models\GiaoVien;
use App\Models\User;
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
    $this->authorize('tv_giaovien');

    // $teacher = GiaoVien::orderBy('ten','ASC') ->paginate(10);
    $teacher = GiaoVien::all();
    return view('backend.administrators.teacher.teacher', [
      'teachers' => $teacher,
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $this->authorize('them_giaovien');

    $data = $request->all();
    $data['user_id'] = User::taoUser('hoc_sinh');
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
    return view('backend.administrators.teacher.show_teacher', [
      'teachers' => $data,
    ]);
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
    return view('backend.administrators.teacher.edit_teacher', [
      'teachers' => $data,
    ]);
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
    $this->authorize('sua_giaovien');

    $data = GiaoVien::find($id);
    $data->fill($request->all());
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
    $this->authorize('xoa_giaovien');

    GiaoVien::where('id', '=', $id)->delete();
    return redirect(route('teachers.index'));
  }
}