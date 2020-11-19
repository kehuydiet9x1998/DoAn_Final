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
    <h2 class="text-center mb-3">Hoan</h2>
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
    </table>

  </div>

  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>

</html>
