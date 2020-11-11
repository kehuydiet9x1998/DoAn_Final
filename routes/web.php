<?php

use App\Http\Controllers\Administrators\ChamCongController;
use App\Http\Controllers\Administrators\PhanLopController;
use App\Http\Controllers\ChatsController;
use App\Http\Controllers\Contacts\FeedBackController;
use App\Http\Controllers\Contacts\HocPhiController;
use App\Http\Controllers\TrangCaNhanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\Teachers\BaiTapController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\students\XemNhanXetController;
use App\Http\Controllers\Teachers\NhanXetHocSinhController;
use App\Models\NhanXetGiaoVien;

Route::get('/', function () {
  return view('frontend.trangchu');
});

Route::middleware(['auth', 'web'])->group(function () {
  Route::get('/dashboard', [DashboardController::class, 'index']);
  Route::prefix('/administrators')->group(function () {
    Route::resource('users', 'Administrators\UserController');
    Route::resource('courses', "Administrators\KhoaHocController");
    Route::resource('staffs', "Administrators\NhanVienController");
    Route::resource('teachers', "Administrators\TeacherController");
    Route::resource('allclass', "Administrators\LopHocController");
    Route::resource('baigiang', "Administrators\BaiGiangController");
    Route::resource('baitap', "Administrators\BaiTapController");
    Route::resource('phanlop', 'Administrators\PhanLopController');
    Route::resource('calendar', 'Administrators\LichController');
    Route::resource('classroom', 'Administrators\PhongHocController');
    Route::resource('admin-chucvu', 'Administrators\ChucVuController');
    Route::resource('loaikhoahoc', 'Administrators\LoaiKhoaHocController');

    Route::get('attendance/report', [ChamCongController::class, 'report']);
    Route::get('attendance/showreport/{doituong}/{thang}', [
      ChamCongController::class,
      'showreport',
    ]);
    Route::resource('attendance', 'Administrators\ChamCongController');
    Route::get('attendance/filter/{doituong}/{ngaycham}', [
      ChamCongController::class,
      'filter',
    ]);

    Route::get('attendance/confirm/{attendance}', [
      ChamCongController::class,
      'confirm',
    ])->name('confirm');
    Route::get('attendance/cancel/{attendance}', [
      ChamCongController::class,
      'cancel',
    ])->name('cancel');

    // Route::get('contracts', function () {
    //   return view('backend.administrators.contracts');
    // });
    Route::get('payroll', function () {
      return view('backend.administrators.payroll');
    });
    Route::get('timesheets', function () {
      return view('backend.administrators.timesheets');
    });
    Route::get('phanquyen', function () {
      return view('backend.administrators.phanquyen');
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
    Route::resource('sanphamcuoikhoa', 'Teachers\SanPhamCuoiKhoaController');

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

    Route::get('comment', [NhanXetHocSinhController::class, 'index']);

    Route::get('items', function () {
      return view('backend.teachers.items');
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
    Route::resource('phanlop', 'Administrators\PhanLopController');
    Route::get('nhanxetgiaovien/{id}', [
      FeedBackController::class,
      'nhanxetgiaovien',
    ]);
    Route::get('checkin-teachers', function () {
      return view('backend.contact.checkIn');
    });
    Route::get('phanlop/{class}', [PhanLopController::class, 'index']);
    Route::get('tinhhocphi', [HocPhiController::class, 'tinhhocphi'])->name(
      'tinhhocphi'
    );
    Route::resource('phieuthu', 'Contacts\PhieuThuController');
    Route::get('print/{id}', [PrintController::class, 'printPhieuThu']);
    Route::get('printphieuchi/{id}', [PrintController::class, 'printPhieuChi']);
    Route::resource('phieuchi', 'Contacts\PhieuChiController');
    Route::resource('khoanthu', 'Contacts\KhoanThuController');
  });

  Route::prefix('/student')->group(function () {
    Route::resource('class', "Students\MyClassController");
    Route::resource('allcourses', 'Students\KhoaHocController');
    Route::resource('home-work', 'Students\BaiTapVeNhaController');
    Route::resource('lessons', 'Students\BuoiHocController');
    Route::resource('calendar', 'Students\LichController');
    Route::resource('my-comment', 'Students\NhanXetGiaoVienController');
    Route::resource('review-khoahoc', 'Students\NhanXetKhoahocController');
    Route::resource('review-giaovien', 'Students\NhanXetGiaoVienController');
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

Route::get('/pro-class', function () {
  return view('proclass-detail');
});

Route::get('/trangcanhan/{id?}', [TrangCaNhanController::class, 'show'])->name(
  'trangcanhan'
);

Route::get('/notifications', function () {
  return view('backend.notification');
});

Route::get('/test', function () {
  return view('backend.test');
});