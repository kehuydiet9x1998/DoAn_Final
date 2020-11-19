<?php
namespace App\Http\Controllers;

use App\Models\HocSinh;
use App\Models\User;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;
// use Illuminate\Http\Request;
// use Validator, Redirect, Response, File;
use Socialite;

class SocialController extends Controller
{
  public function redirect($provider)
  {
    return Socialite::driver($provider)->redirect();
  }

  public function callback($provider)
  {
    $getInfo = Socialite::driver($provider)->user();
    // echo '<pre>';
    // var_dump($getInfo);
    // echo '</pre>';
    $user = $this->createUser($getInfo, $provider);
    auth()->login($user);
    return redirect()->to('/dashboard');
  }

  function createUser($getInfo, $provider)
  {
    $id = FacadesDB::select("SHOW TABLE STATUS LIKE 'hoc_sinh'");
    $next_id = $id[0]->Auto_increment;

    $user = User::getUserWithEmail($getInfo->email);
    if (!$user) {
      $user = User::create([
        'name' => $getInfo->name,
        'provider' => $provider,
        'provider_id' => $getInfo->id,
        'role_id' => '2',
        'trangthai' => 'Hoạt động',
        'anhdaidien' => $getInfo->avatar,
      ]);
      $user->hocSinh()->create([
        'hodem' => $getInfo->name,
        'email' => $getInfo->email,
        'trangthai' => 'Chờ tư vấn',
      ]);
    }
    return $user;
  }
}