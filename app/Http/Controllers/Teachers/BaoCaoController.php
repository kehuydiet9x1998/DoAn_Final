<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Models\LopHoc;
use Illuminate\Http\Request;
use PDF;

class BaoCaoController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $data = LopHoc::all();
    return view('backend.teachers.baocao.baocao', ['lophocs' => $data]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $lophocs = LopHoc::all();
    return view('backend.teachers.baocao.printf', compact('lophocs'));
  }

  /**chờ tí. t dungf ham create
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\LopHoc  $lopHoc
   * @return \Illuminate\Http\Response
   */
  public function show(LopHoc $lopHoc)
  {
    // return view('backend.teachers.baocao.printf', compact('LopHoc'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\LopHoc  $lopHoc
   * @return \Illuminate\Http\Response
   */
  public function edit(LopHoc $lopHoc)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\LopHoc  $lopHoc
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, LopHoc $lopHoc)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\LopHoc  $lopHoc
   * @return \Illuminate\Http\Response
   */
  public function destroy(LopHoc $lopHoc)
  {
    //
  }
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function createPDF()
  {
    // return view('backend.teachers.baocao.pdf_view');
    // retreive all records from db
    $data = LopHoc::all();

    // share data to view
    view()->share('lophocs', $data);
    $pdf = PDF::loadView('backend.teachers.baocao.pdf_view', $data);

    // download PDF file with download method
    return $pdf->download('pdf_file.pdf');
  }
}