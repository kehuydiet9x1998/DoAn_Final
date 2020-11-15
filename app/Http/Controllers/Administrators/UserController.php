<?php

namespace App\Http\Controllers\Administrators;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $users = User::all();
    $roles = Role::all();
    $this->authorize('tv_nguoidung');

    return view(
      'backend.administrators.users.list_user',
      compact('users', 'roles')
    );
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $this->authorize('them_nguoidung');

    $data = $request->except('password-confirmation', 'anhdaidien');
    $data['anhdaidien'] = $request->file('anhdaidien')->save('anhdaidien');
    $data['password'] = bcrypt($request->password);
    User::create($data);
    return back();
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\User  $user
   * @return \Illuminate\Http\Response
   */
  public function show(User $user)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\User  $user
   * @return \Illuminate\Http\Response
   */
  public function edit(User $user)
  {
    $roles = Role::all();
    return view(
      'backend.administrators.users.edit_user',
      compact('user', 'roles')
    );
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\User  $user
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, User $user)
  {
    $this->authorize('sua_nguoidung');

    $data = $request->except('password-confirmation', 'anhdaidien');
    if ($request->has('anhdaidien')) {
      $data['anhdaidien'] = $request->file('anhdaidien')->store('anhdaidien');
    }
    $data['password'] = bcrypt($request->password);
    $user->fill($data);
    $user->save();
    return back();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\User  $user
   * @return \Illuminate\Http\Response
   */
  public function destroy(User $user)
  {
    $this->authorize('xoa_nguoidung');

    $user->delete();
    return back();
  }
}