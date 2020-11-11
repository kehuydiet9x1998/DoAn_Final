<?php

namespace App\Http\Controllers\Administrators;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JsValidator;
use App\Models\ChucVu;

class ChucVuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  protected $validationRules = ['ten' => 'required','mota'=>'required','hesoluong'=>'required'];
  protected $attributes = ['ten' => 'Tên chức vụ','mota'=>'Mô tả', 'hesoluong'=>'Hệ số lương'];

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
        $chucvus = ChucVu::all();
        return view('backend.administrators.chucvu.chucvu',
          compact('chucvus'))->with(['jsValidator' => $this->jsValidator]);
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
      ChucVu::create($data);
      return redirect(route('admin-chucvu.index'));
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
      $chucvu = ChucVu::find($id);
      return view('backend.administrators.chucvu.edit_chucvu__modal',
        compact('chucvu'))->with(['jsValidator' => $this->jsValidator]);
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
      $chucvu = ChucVu::findOrFail($id);
      $chucvu->fill($request->all());
      $chucvu->save();
      return redirect(route('admin-chucvu.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      ChucVu::where('id', '=', $id)->delete();
      return redirect(route('admin-chucvu.index'));
    }
}
