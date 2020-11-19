<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Models\KhoaHoc;
use PDF;
use Illuminate\Http\Request;
class PDFController extends Controller
{
    public function preview()
    {
      $khoahocs = KhoaHoc::all();
      return view('backend.administrators.courses.preview',compact('khoahocs'));
    }

    public  function generatePDF(){
      $kh = KhoaHoc::all();

      // share data to view
      view()->share('khoahocs',$kh);
      $pdf = PDF::loadView('backend.administrators.courses.preview', $kh);

      return $pdf->download('pdf_file.pdf');
      }
}
