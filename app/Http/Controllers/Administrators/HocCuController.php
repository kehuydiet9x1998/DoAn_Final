<?php

namespace App\Http\Controllers\Administrators;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HocCu;
use App\Models\KhoHocCu;
use JsValidator;

class HocCuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  protected $validationRules = ['tenhoccu' => 'required','soluong'=>'required',
//    'hinhanhhoccu'=>'required'
  ];
  protected $attributes = ['tenhoccu' => 'Tên thiết bị','soluong'=>'Số lượng thiết bị',
    'hinhanhhoccu'=>'Hình ảnh thiết bị'];

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
        $khohoccus = KhoHocCu::paginate(10);

        $hoccus = HocCu::all();
        return view('backend.administrators.hoccu.listhoccu',
          compact('khohoccus','hoccus'))->with(['jsValidator'=>$this->jsValidator]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
      $data = $request->except('hinhanhhoccu');
      $data['hinhanhhoccu'] =  $request->file('hinhanhhoccu')->store('hoccu');
      KhoHocCu::create($data);
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
        $khohoccu = KhoHocCu::find($id);
        return view('backend.administrators.hoccu.div_hoccu',compact('khohoccu'));
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
        return view('backend.administrators.hoccu.edit_hoccu_modal',
          compact('khohoccu'))->with(['jsValidator'=>$this->jsValidator]);
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
      $khohoccu->fill($request->except('hinhanhhoccu'));
      if($request->has('hinhanhhoccu')){
        $khohoccu->hinhanhhoccu = $request->file('hinhanhhoccu')->store('hoccu');
      }

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
      KhoHocCu::where('id', '=', $id)->delete();
      return redirect(route('admin-hoccu.index'));
    }
}
