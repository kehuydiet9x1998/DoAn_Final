<?php

use App\Http\Controllers\ChatsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Teachers\BaiTapController;
use Illuminate\Support\Facades\Route;
use App\Models\NhanXetHocSinh;
use App\Http\Controllers\students\XemNhanXetController;
use App\Http\Controllers\Teachers\NhanXetHocSinhController;

Route::get('/', function () {
  return view('frontend.trangchu');
});

Route::middleware(['auth', 'web'])->group(function () {
  Route::get('/dashboard', [DashboardController::class, 'index']);
  Route::prefix('/administrators')->group(function () {
    Route::resource('courses', "Administrators\KhoaHocController");
    Route::resource('staffs', "Administrators\NhanVienController");
    Route::resource('teachers', "Administrators\TeacherController");
    Route::resource('allclass', "Administrators\LopHocController");

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
    Route::resource('classes', 'Teachers\LopHocController');
    Route::resource('lessons', 'Teachers\BuoiHocController');
    Route::resource('checkin', 'Lessons\CheckInController');
    Route::resource('diemdanh', 'Lessons\DiemDanhController');
    Route::resource('danhsachbaitap', 'Lessons\DanhSachBaiTapController');
    Route::resource('calendar', 'Teachers\LichController');
    Route::resource('nhanxethocsinh', 'Teachers\NhanXetHocSinhController');
    // Route::get('/nhanxetmodal/{hocsinhid}/{buoihocid}/{lophocid}/{khoahocid}', function ($hocsinhid, $buoihocid, $lophocid, $khoahocid) {
    //   return view('backend.teachers.classes.nhanxet-modal', ['hocsinhid' => $hocsinhid, 'buoihocid' => $buoihocid, 'lophocid' => $lophocid, 'khoahocid' => $khoahocid]);
    // });
    Route::get('/nhanxet/{hocsinhid}/{buoihocid}/{lophocid}/{khoahocid}', [
      NhanXetHocSinhController::class,
      'NhanXet',
    ]);
    Route::get('/xemnhanxet/{hocsinhid}/{buoihocid}/{lophocid}/{khoahocid}', [
      NhanXetHocSinhController::class,
      'XemNhanXet',
    ]);
    Route::get(
      '/nhanxetmodal/{hocsinhid}/{buoihocid}/{lophocid}/{khoahocid}',
      function ($hocsinhid, $buoihocid, $lophocid, $khoahocid) {
        return view('backend.teachers.classes.nhanxet-modal', [
          'hocsinhid' => $hocsinhid,
          'buoihocid' => $buoihocid,
          'lophocid' => $lophocid,
          'khoahocid' => $khoahocid,
        ]);
      }
    );

    Route::resource('check-test', 'Teachers\BaiTapController');

    Route::get('/xembaitap/{hocsinhid}/{buoihocid}', [
      BaiTapController::class,
      'xembaitap',
    ]);

    Route::get('comment', function () {
      return view('backend.teachers.comment');
    });

    Route::get('items', function () {
      return view('backend.teachers.items');
    });
  });

  Route::prefix('/contacts')->group(function () {
    Route::resource('students', "Contacts\StudentController");
    Route::resource('feedbacks', "Contacts\FeedBackController");
    Route::resource('lichtrainghiem', "Contacts\LichTraiNghiemController");
    Route::get('list-teachers', function () {
      return view('backend.contact.listTeacher');
    });
    Route::get('dashboard', function () {
      return view('backend.contact.dashboard-contact');
    });
  });

  Route::get('/news-feed', function () {
    return view('backend.bantin');
  });

  Route::prefix('/contacts')->group(function () {
    Route::resource('students', "Contacts\StudentController");
    Route::resource('hocphis', "Contacts\HocPhiController");
    Route::resource('feedbacks', "Contacts\FeedBackController");
    Route::resource('lichtrainghiem', "Contacts\LichTraiNghiemController");
    Route::resource('list-teachers', "Contacts\GiangVienController");

    Route::get('classify', function () {
      return view('backend.contact.phanlop');
    });
  });

  Route::prefix('/student')->group(function () {
    Route::resource('class', "Students\MyClassController");
    Route::resource('allcourses', 'Students\KhoaHocController');
    Route::resource('home-work', 'Students\BaiTapVeNhaController');
    Route::resource('lessons', 'Students\BuoiHocController');
    Route::resource('calendar', 'Students\LichController');
    Route::resource('my-comment', 'Students\NhanXetGiaoVienController');
    Route::get('review', function () {
      return view('backend.students.review');
    });
    Route::get('/xemnhanxet/{idbuoihoc}/{idlophoc}/{idkhoahoc}', [
      XemNhanXetController::class,
      'showNhanXet',
    ]);
    Route::get('review', function () {
      return view('backend.students.review');
    });
    Route::get('/notifications', function () {
      return view('backend.notification');
    });
    Route::get('class/comment/1', function () {
      return view('backend.students.nhanxetgiaovien.comment');
    });
  });
});
Route::get('/myhome', function () {
  return view('backend.myhome');
});
Auth::routes();

Route::get('/chat', [ChatsController::class, 'index']);
Route::get('/messages/{id}', [ChatsController::class, 'getMessage'])->name(
  'messages'
);
Route::post('/messages', [ChatsController::class, 'sendMessage']);
