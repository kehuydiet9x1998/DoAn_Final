<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Models\LopHoc;
use Illuminate\Http\Request;
use PDF;

class BaoCaoLopHocController extends Controller
{
  // function to display preview
  // public function preview()
  // {
  //   return view('test1');
  // }
  // public function generatePDF()
  // {
  //   $pdf = PDF::loadView('test1');
  //   return $pdf->download('demo.pdf');
  // }
  public function LopHoc()
  {
    $lophocs = LopHoc::all();
    return view('test1', compact('lophocs'));
  }
  public function createPDF()
  {
    // retreive all records from db
    $lophocs = LopHoc::all();

    // share data to view
    // view()->share('lophocs', compact('lophocs'));
    $pdf = PDF::loadView('test2', compact('lophocs'));
    // download PDF file with download method
    return $pdf->download('pdf_file.pdf');
  }
}