@extends('backend.layout.index')
@section('content')
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/pages.css')}}">
<div class="pcoded-inner-content">

  <div class="main-body">
    <div class="page-wrapper">

      <div class="page-body">
        <div class="row">
          <div class="col-sm-12">

            <div class="card">
              <div class="card-header">
                <h5>Xưởng lắp ráp ROBOT</h5>
              </div>
              <div class="card-block">
                <div class="row ui-sortable" id="draggablePanelList">
                  <div class="col-lg-12 col-xl-12 ui-sortable-handle">
                    <div class="card-sub">
                      <img class="card-img-top img-fluid" src="{{asset('assets/jpg/card1.jpg')}}" alt="Card image cap">
                      <div class="card-block">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-xl-5">
            <div class="card">
              <div class="card-block p-b-0">
                <div class="row">
                  <div class="col-md-12 ui-sortable" id="draggableMultiple">
                    <div class="sortable-moves card-sub ui-sortable-handle" style="padding-left: 10px">
                      <h5 class="card-title"><i class="fa fa-wpforms" style="padding-right: 3px"></i>Nội dung: </h5>
                      <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                    <div class="sortable-moves card-sub ui-sortable-handle" style="padding-left: 10px">
                      <h5 class="card-title"><i class="fa fa-gg" style="padding-right: 3px"></i>Độ tuổi: </h5>
                      <p class="card-text">Từ 5 - 7 tuổi</p>
                    </div>
                    <div class="sortable-moves card-sub ui-sortable-handle" style="padding-left: 10px">
                      <h5 class="card-title"><i class="fa fa-wpforms" style="padding-right: 3px"></i>Thời lượng: </h5>
                      <p class="card-text">144 giờ (2 học kỳ - 24 tháng), 90 phút mối buổi</p>
                    </div>
                    <div class="sortable-moves card-sub ui-sortable-handle" style="padding-left: 10px">
                      <h5 class="card-title"><i class="fa fa-wpforms" style="padding-right: 3px"></i>Công cụ: </h5>
                      <p class="card-text">Tablet, Uaro Kit</p>
                    </div>
                    <div class="sortable-moves card-sub ui-sortable-handle" style="padding-left: 10px">
                      <h5 class="card-title"><i class="fa fa-wpforms" style="padding-right: 3px"></i>Điều kiện để học: </h5>
                      <p class="card-text">Tư duy cao</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-lg-12 col-xl-7">
            <div class="card">
              <div class="card-block">
                <div class="row ui-sortable" id="draggableWithoutImg">
                  <div class="col-md-12 ui-sortable-handle">
                    <div class="card-sub m-b-20">
                      <div class="card-block">
                        <h5 class="card-header">Mô tả khóa học</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 ui-sortable-handle">
                    <div class="card-sub m-b-20">
                      <div class="card-block">
                        <h5 class="card-header">Học sinh được gì</h5>
                        <p class="card-title">Kiến thức</p>
                        <p class="card-text">Biết về robot</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>

    </div>
  </div>
</div>
@endsection
