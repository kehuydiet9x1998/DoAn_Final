<?php

namespace App\Http\Controllers;

use App\Models\BackUp;
use Artisan;
use DB;
use Exception;
use Illuminate\Http\Request;

class BackUpController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $backups = BackUp::orderBy('created_at', 'desc')->get();
    return view('backend.administrators.backup.backup', compact('backups'));
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
    $size = DB::select(
      DB::raw(
        "SELECT SUM(data_length)/POWER(1024,2) size FROM information_schema.tables WHERE table_schema ='teky'"
      )
    )[0]->size;
    $filename = $request->filename;
    Artisan::call('db:backup', ['--filename' => $filename]);
    BackUp::create([
      'tenfile' => $filename,
      'dungluong' => $size . ' MB',
    ]);
    session()->flash('success-message', 'Sao lưu thành công');
    // session()->flash('error-message', 'Sao lưu thất bại');

    return redirect()->to('/' . $filename);
    // return back();
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\BackUp  $backUp
   * @return \Illuminate\Http\Response
   */
  public function show(BackUp $backUp)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\BackUp  $backUp
   * @return \Illuminate\Http\Response
   */
  public function edit(BackUp $backUp)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\BackUp  $backUp
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, BackUp $backUp)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\BackUp  $backUp
   * @return \Illuminate\Http\Response
   */
  public function destroy(BackUp $backup)
  {
    $backup->delete();
    return back();
  }
}