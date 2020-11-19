<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel 7 PDF Example</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class="container mt-5">
    <h2 class="text-center mb-3">Laravel HTML to PDF Example</h2>

    <div class="d-flex justify-content-end mb-4">
      <a class="btn btn-primary" href="{{ URL::to('/teachers/xuatbaocao/pdf') }}">Export to PDF</a>
    </div>

    <table class="table table-bordered">
      <thead>
        <tr>
          {{-- <th>TT</th> --}}
          <th>ID Lớp học</th>
          <th>Tên lớp học</th>
          <th>Khóa học</th>
          <th>Ngày bắt đầu</th>
          <th>Ngày kết thúc</th>
          <th>Giáo viên dạy</th>
        </tr>
      </thead>
      @php
      $dem = 1;
      @endphp
      <tbody>
        @foreach ($lophocs ?? '' as $lophoc)
        <tr>
          {{-- <td>{{$dem}}</td> --}}
          <td>{{$lophoc->id}}</td>
          <td>{{$lophoc->tenlop}}</td>
          {{-- <>{{ $khoanthu->sohocsinh - $khoanthu->sohocsinhdadong }}</> --}}
          <td>{{$lophoc->khoahoc->tenkhoahoc}}</td>
          <td>{{$lophoc->ngaybatdau}}</td>
          <td>{{$lophoc->ngayketthuc}}</td>
          <td>{{$lophoc->giaovien->hodem.' '.$lophoc->giaovien->ten}}</td>
        </tr>
        @php
        $dem++;
        @endphp
        @endforeach
      </tbody>
    </table>

  </div>

  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>

</html>
