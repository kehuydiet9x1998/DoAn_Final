@extends('backend.layout.index')
@section('content')
  <div class="pcoded-inner-content">
    <div class="main-body">
      <div class="page-wrapper">
        <div class="page-body">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-header-text" style="font-size: 24px">THÔNH BÁO</h5>
                </div>
                <div class="card-block accordion-block">
                  <div id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="accordion-panel">
                      <div class="accordion-heading" role="tab" id="headingOne">
                        <h3 class="card-title accordion-title">
                          <a class="accordion-msg waves-effect waves-dark scale_active collapsed"
                             data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false"
                             aria-controls="collapseOne" style="font-size: 16px; font-weight: bold">
                            <i class="fa fa-audio-description" style="margin-right: 10px"></i>
                            [TEKY'S YOUNG TALENT] “KHẲNG ĐỊNH BẢN LĨNH TEKID” 🔥🔥
                            admin2 đăng lúc 11:52 - 15/09/20
                          </a>
                        </h3>
                      </div>
                      <div id="collapseOne" class="panel-collapse in collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                        <div class="accordion-content accordion-desc">
                          <img src="{{asset('jpg/overflow.jpg')}}" alt="Hình ảnh" style="margin-bottom: 10px">
                            @include('backend.noidung-notification')
                        </div>
                      </div>
                    </div>
                    <div class="accordion-panel">
                      <div class="accordion-heading" role="tab" id="headingTwo">
                        <h3 class="card-title accordion-title">
                          <a class="accordion-msg waves-effect waves-dark scale_active collapsed"
                             data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                             aria-expanded="false" aria-controls="collapseTwo">
                            Lorem Message 2
                          </a>
                        </h3>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" style="">
                        <div class="accordion-content accordion-desc">
                          <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-panel">
                      <div class=" accordion-heading" role="tab" id="headingThree">
                        <h3 class="card-title accordion-title">
                          <a class="accordion-msg waves-effect waves-dark scale_active collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Lorem Message 3
                          </a>
                        </h3>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" style="">
                        <div class="accordion-content accordion-desc">
                          <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                          </p>
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
