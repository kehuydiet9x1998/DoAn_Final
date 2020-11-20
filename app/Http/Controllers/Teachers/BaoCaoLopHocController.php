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
  // public function LopHoc()
  // {
  //   $lophocs = LopHoc::all();
  //   return view('test1', compact('lophocs'));
  // }
  // public function createPDF()
  // {
  //   // retreive all records from db
  //   $lophocs = LopHoc::all();

  //   // share data to view
  //   // view()->share('lophocs', compact('lophocs'));
  //   $pdf = PDF::loadView('test2', compact('lophocs'));
  //   // download PDF file with download method
  //   return $pdf->download('pdf_file.pdf');
  // }
  public function LopHoc()
  {
    $lophocs = LopHoc::where('trangthai', 'Đã kết thúc')->get(); // t k bieeets tragj thas. r oke
    return view('backend.teachers.baocao.baocao', compact('lophocs'));
  }

  public function BaoCaoLopHoc()
  {
    $lophocs = LopHoc::all();
    return view('backend.teachers.baocao.printf', compact('lophocs'));
  }

  // public function generatePDF()
  // {
  //   $lophocs = LopHoc::all();
  //   // share data to view
  //   view()->share('lophocs', $lophocs);
  //   $pdf = PDF::loadView('backend.teachers.baocao.printf', $lophocs);

  //   return $pdf->download('pdf_file.pdf');
  // }
}