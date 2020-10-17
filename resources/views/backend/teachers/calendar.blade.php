@extends('backend.layout.index')
@section('content')
  <style>
    :root{
      --sang: #a8ee06;
      --chieu: #EADE06;
      --toi : #FF611B;
    }
  </style>
  <div class="pcoded-inner-content">
    <div class="main-body">
      <div class="page-wrapper">
        <div class="page-body">
          <div class="card">
            <div class="card-header">
              <h5>Lịch trình</h5>
            </div>
            <div class="card-block table-border-style">
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                  <tr>
                    <th>THỨ</th>
                    @for($i = 0; $i<7 ; $i++)
                      @if($i != 6)
                    <th style="text-align: center">THỨ {{$i+2}}
                      <p class=" m-b-0 text-muted">{{16 + $i}}/10/2020</p>
                    </th>
                      @else
                        <th style="text-align: center">CHỦ NHẬT
                          <p class=" m-b-0 text-muted">{{16 + $i}}/10/2020</p>
                        </th>
                      @endif
                    @endfor
                  </tr>
                  </thead>
                  <tbody>

                  <tr>
                    <th scope="row" style="background-color: var(--sang); vertical-align: middle">SÁNG</th>
                    <td style="white-space: normal; background-color: var(--sang); font-weight: 600">LẬP TRÌNH WEB VỚI PYTHON KẾT HỢP VỚI WORDPRESS
                      <p class=" m-b-0 text-muted">Thời gian: 16:00h - 18:00h</p>
                      <p class=" m-b-0 text-muted">Khóa học: Lập trình WEB</p>
                      <p class=" m-b-0 text-muted">Mã lớp: LP - 001</p>
                      <p class=" m-b-0 text-muted">Bài học : 11/12</p>
                      <p class=" m-b-0 text-muted">Phòng học: 318A4</p>
                    </td>
                    @for($i = 0 ; $i<6; $i++)
                        <td></td>
                    @endfor
                  </tr>
                  <tr>
                    <th scope="row" style="background-color: var(--chieu); vertical-align: middle">CHIỀU</th>
                    @for($i = 0 ; $i<7; $i++)

                      <td></td>
                    @endfor
                  </tr>
                  <tr>
                    <th scope="row" style="background-color: var(--toi); vertical-align: middle">TỐI</th>
                    @for($i = 0 ; $i<7; $i++)
                      <td></td>
                    @endfor
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
