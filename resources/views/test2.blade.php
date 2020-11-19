<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    body {
      font-family: DejaVu Sans;
      font-size: 10pt;
    }

    table,
    td,
    th {
      border: 1px solid black;
      text-align: center;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

  </style>
</head>

<body>
  <table>
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
      @foreach ($lophocs as $lophoc)
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
</body>

</html>
