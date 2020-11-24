<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Models\KhoaHoc;
use App\Models\LopHoc;
use DateTime;
use Illuminate\Http\Request;
use PDF;

class BaoCaoLopHocController extends Controller
{
  private $idkhoahoc = 0;
  public function LopHoc()
  {
    $new_date = new DateTime('01/01/1970');
    $khoahocs = KhoaHoc::all();
    $lophocs = LopHoc::where('trangthai', '<>', 'Đã kết thúc')->get(); // t k bieeets tragj thas. r oke
    return view('backend.teachers.baocao.baocao', compact('lophocs', 'khoahocs', 'new_date'));
  }

  public function BaoCaoLopHoc($idkhoahoc, $date)
  {
    $ngaymacdinh = new DateTime('01/01/1970');
    $new_date = new DateTime($date);
    if ($idkhoahoc == 0) {
      if ($new_date == $ngaymacdinh) {
        $lophocs = LopHoc::where('trangthai', '<>', 'Đã kết thúc')->get();
        return view('backend.teachers.baocao.printf', compact('lophocs'));
      } else {
        $lophocs = LopHoc::where('trangthai', '<>', 'Đã kết thúc')->where('ngayketthuc', '<', $new_date)->get();
        return view('backend.teachers.baocao.printf', compact('lophocs'));
      }
    } else {
      if ($new_date == $ngaymacdinh) {
        $lophocs = LopHoc::where('khoa_hoc_id', '=', "$idkhoahoc")->where('trangthai', '<>', 'Đã kết thúc')->get();
        return view('backend.teachers.baocao.printf', compact('lophocs'));
      } else {
        $lophocs = LopHoc::where('khoa_hoc_id', '=', "$idkhoahoc")->where('trangthai', '<>', 'Đã kết thúc')->where('ngayketthuc', '<', $new_date)->get();
        return view('backend.teachers.baocao.printf', compact('lophocs'));
      }
    }
  }
  public function TimKiem(Request $rq)
  {
    $new_date = date('d-m-Y', strtotime($_POST['denngay']));
    $ngaymacdinh = new DateTime('01/01/1970');
    $new_date = new DateTime($new_date);
    $khoahocs = KhoaHoc::all();

    if (empty($rq->select)) {
      if ($new_date == $ngaymacdinh) {
        $lophocs = LopHoc::where('trangthai', '<>', 'Đã kết thúc')->get();
        // $this->manglophoc = $lophocs;
        return view('backend.teachers.baocao.baocao', compact('lophocs', 'khoahocs', 'new_date'));
      } else {
        $lophocs = LopHoc::where('trangthai', '<>', 'Đã kết thúc')->where('ngayketthuc', '<', $new_date)->get();
        // $this->manglophoc = $lophocs;
        return view('backend.teachers.baocao.baocao', compact('lophocs', 'khoahocs', 'new_date'));
      }
    } else {
      if ($new_date == $ngaymacdinh) {
        $khoa_hoc_id = KhoaHoc::where('tenkhoahoc', '=', "$rq->select")->first();
        $khoa_hoc_id = $khoa_hoc_id->id;
        $lophocs = LopHoc::where('khoa_hoc_id', '=', "$khoa_hoc_id")->where('trangthai', '<>', 'Đã kết thúc')->get();
        return view('backend.teachers.baocao.baocao', compact('lophocs', 'khoahocs', 'khoa_hoc_id', 'new_date'));
      } else {
        $khoa_hoc_id = KhoaHoc::where('tenkhoahoc', '=', "$rq->select")->first();
        $khoa_hoc_id = $khoa_hoc_id->id;
        $lophocs = LopHoc::where('khoa_hoc_id', '=', "$khoa_hoc_id")->where('trangthai', '<>', 'Đã kết thúc')->where('ngayketthuc', '<', $new_date)->get();
        return view('backend.teachers.baocao.baocao', compact('lophocs', 'khoahocs', 'khoa_hoc_id', 'new_date'));
      }
    }
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