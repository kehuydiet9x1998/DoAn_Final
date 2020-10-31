<?php

namespace App\Http\Controllers\Administrators;

use App\Http\Controllers\Controller;
use App\Models\LopHoc;
use Illuminate\Http\Request;

class LichController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $dsLopHoc = LopHoc::all();
    return view('backend.teachers.calendar', compact('dsLopHoc'));
  }
}