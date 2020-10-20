<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\PhuHuynh;
use App\Models\User;
use App\Models\HocSinh;
use JsValidator;
use Validator;

class StudentController extends Controller
{
  protected $validationRules = ['ten' => 'required'];
  protected $attributes = ['ten' => 'Tên'];

  public function __construct()
  {
    $this->jsValidator = JsValidator::make(
      $this->validationRules,
      [],
      $this->attributes
    );
  }
  // t ví dụ m validate thằng
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $students = HocSinh::orderBy('ten', 'ASC')->get();
    return view(
      'backend.contact.hocsinh.listStudent',
      compact('students')
    )->with(['jsValidator' => $this->jsValidator]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(Request $request)
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
    HocSinh::create($data);
    return redirect(route('students.index'));
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $hocsinh = HocSinh::findOrFail($id);
    return view('backend.contact.hocsinh.show_student_modal', [
      'hocsinh' => $hocsinh,
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $hocsinh = HocSinh::find($id);
    return view('backend.contact.hocsinh.edit_student_modal', [
      'hocsinh' => $hocsinh,
    ])->with(['jsValidator' => $this->jsValidator]);
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
    $hocsinh = HocSinh::findOrFail($id);
    $hocsinh->fill($request->all());
    $hocsinh->save();
    return redirect(route('students.index'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    HocSinh::where('id', '=', $id)->delete();
    return redirect(route('students.index'));
  }
}