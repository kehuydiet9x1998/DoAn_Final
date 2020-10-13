<?php

use App\Http\Controllers\Administrators\KhoaHocController;
use App\Models\KhoaHoc;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('frontend.trangchu');
});

Route::get('/dangnhap', function () {
  return view('backend.dangnhap');
});
Route::prefix('/administrators')->group(function () {
  Route::resource('courses', "Administrators\KhoaHocController");
  Route::resource('staffs', "Administrators\NhanVienController");
  Route::resource('teachers', "Administrators\TeacherController");

  Route::get('classes', function () {
    return view('backend.administrators.class.classes');
  });
  Route::get('contracts', function () {
    return view('backend.administrators.contracts');
  });
  Route::get('payroll', function () {
    return view('backend.administrators.payroll');
  });
  Route::get('timesheets', function () {
    return view('backend.administrators.timesheets');
  });
});

Route::prefix('teachers')->group(function () {
  Route::get('calendar', function () {
    return view('backend.teachers.calendar');
  });
  Route::get('items', function () {
    return view('backend.teachers.items');
  });

  Route::resource('classes', 'Teachers\LopHocController');
  Route::resource('lessons', 'Teachers\BuoiHocController');

  Route::get('check-test', function () {
    return view('backend.teachers.chambai');
  });
  Route::get('comment', function () {
    return view('backend.teachers.comment');
  });
});

Route::get('/dashboard', function () {
  return view('backend.dashboard');
});

Route::prefix('/contacts')->group(function () {
  Route::resource('students', "Contacts\StudentController");
  Route::resource('hocphis', "Contacts\HocPhiController");
  Route::resource('feedbacks', "Contacts\FeedBackController");
  Route::resource('lichtrainghiem', "Contacts\LichTraiNghiemController");
  Route::resource('list-teachers', "Contacts\GiangVienController");
});

Route::get('/news-feed', function () {
  return view('backend.bantin');
});

Route::get('/test', function () {
  return view('backend.test');
});

Route::get('/khoa-hoc', function () {
  return view('backend.khoahoc.alldata');
});

Route::get('/admin/hocsinh', function () {
  return view('backend.hocsinh.datahocsinh');
});

Route::get('/admin/hocsinh/themhocsinh', function () {
  return view('backend.hocsinh.themhocsinh');
});


Route::get('/admin/nhan-xet', function () {
  return view('backend.nhanxet.datanhanxet');
});

Route::get('/admin/nhan-xet/themnhanxet', function () {
  return view('backend.nhanxet.themnhanxet');
});

Route::get('/admin/thoi-khoa-bieu', function () {
  return view('backend.thoikhoabieu.datathoikhoabieu');
});

//test
Route::get('/test', function () {
  return view('backend.administrators.courses.table', [
    'khoahocs' => KhoaHoc::all(),
  ]);
});