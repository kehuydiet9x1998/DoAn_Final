<?php

namespace App\Http\Controllers\Administrators;

use App\Http\Controllers\Controller;
use App\Models\KhoaHoc;
use Illuminate\Http\Request;
use JsValidator;
use App\Models\LoaiKhoaHoc;
class LoaiKhoaHocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  protected $validationRules = ['tenloaikhoahoc' => 'required','mota'=>'required'];
  protected $attributes = ['tenloaikhoahoc' => 'Tên loại khóa học','mota'=>'Mô tả loại khóa học'];

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
        $loaikhoahocs = LoaiKhoaHoc::paginate(10);
        return view('backend.administrators.courses.loaikhoahoc',
          compact('loaikhoahocs'))->with(['jsValidator' => $this->jsValidator]);
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
        LoaiKhoaHoc::create($data);
        return redirect(route('loaikhoahoc.index'));
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
        $loaikhoahoc = LoaiKhoaHoc::find($id);
        return view('backend.administrators.courses.edit_loaikhoahoc_modal',
          compact('loaikhoahoc'))->with(['jsValidator'=>$this->jsValidator]);
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
        $loaikhoahoc = LoaiKhoaHoc::findOrFail($id);
        $loaikhoahoc->fill($request->all());
        $loaikhoahoc->save();
        return redirect(route('loaikhoahoc.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LoaiKhoaHoc::where('id','=',$id)->delete();
        return redirect(route('loaikhoahoc.index'));
    }
}
