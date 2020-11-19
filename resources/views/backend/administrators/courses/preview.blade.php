<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
      body{
        font-family: "Times New Roman",sans-serif;
        font-size: 15px;
      }
    </style>
    <title>Khóa học 2020 - Báo Cáo</title>
  </head>
  <body>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <p class="text-center" style="font-size: 16px; font-weight: bold">HỌC VIỆN SÁNG TẠO CÔNG NGHỆ TEKY</p>
        <p class="text-center" style="font-size: 16px; margin-top: -20px; font-weight: bold">Chi nhánh: 104 Lương Khánh Thiện - Hải Phòng</p>
      </div>
      <div class="col-sm-6">
      <p class="text-center" style="font-size: 16px; font-weight: bold">CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</p>
      <p class="text-center" style="font-size: 16px; font-weight: bold; margin-top: -20px">Độc lập - Tự do - Hạnh phúc</p>
      <p class="text-right" style="font-size: 16px; font-style: italic; margin-top: -10px">
        Hải Phòng, ngày {{\Carbon\Carbon::now()->day}} tháng {{\Carbon\Carbon::now()->month}} năm {{\Carbon\Carbon::now()->year}}
      </p>
    </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
      <p class="text-center" style="font-size: 24px; font-weight: bold">BÁO CÁO CÁC KHÓA HỌC HIỆN NAY</p>
      </div>
    </div>
    <div class="row" style="margin-top: 30px">
      <div class="col-12">
        <table class="table table-bordered text-center">
          <thead>
          <tr>
            <th>STT</th>
            <th>TÊN KHÓA HỌC</th>
            <th>SĨ SỐ TỐI ĐA</th>
            <th>SỐ LƯỢNG LỚP HỌC</th>
            <th>SỐ LƯỢNG HỌC VIÊN</th>
          </tr>
          </thead>
          <tbody>
          @foreach($khoahocs as $key => $kh)
            @php
              $sohocsinh = $kh->dsLopHoc()->with('dslophoc')->get()->pluck('dslophoc')->collapse()->count();
            @endphp
              <tr>
                <td>{{$key}}</td>
                <td style="white-space: normal;">{{$kh->tenkhoahoc}}</td>
                <td style="text-align: center">{{$kh->sisotoida}}</td>
                <td style="text-align: center">{{$kh->dslophoc()->count()}}</td>
                <td style="text-align: center">{{$sohocsinh}}</td>
              </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <div class="row" style="margin-top: 20px">
      <div class="col-sm-6">
        <p class="text-center" style="font-size: 16px; font-weight: bold">Quản lý chi nhanh xác nhận</p>
        <p class="text-center" style="font-size: 16px; font-style: italic; margin-top: -10px">(Ký và ghi rõ họ tên)</p>
      </div>
      <div class="col-sm-6">
        <p class="text-center" style="font-size: 16px; font-weight: bold">Người làm báo cáo</p>
        <p class="text-center" style="font-size: 16px; font-style: italic; margin-top: -10px">(Ký và ghi rõ họ tên)</p>
        <p class="text-center" style="font-size: 16px; margin-top: 80px">{{auth()->user()->nhanvien->hodem . ' '. auth()->user()->nhanvien->ten}}</p>
      </div>
    </div>
  </div>
  </body>
</html>
<script>
  window.print();
</script>
