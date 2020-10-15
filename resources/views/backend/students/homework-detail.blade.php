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
                  <h6 class="col-sm-12" style="font-weight: bold; font-size: 16px">Lớp: Xưởng lắp ráp ROBOT - LP - 001</h6>
                  <h6 class="col-sm-12">Học viên : Nguyễn Hải Minh</h6>
                  <h6 class="col-sm-12">Buổi học : 11/12</h6>
                  <h6 class="col-sm-12">Ngày học : 20/8/2020</h6>
                  <h6 class="col-sm-12 text-c-green" style="display: none">Số câu đúng : 1/10</h6>
                  <h6 class="col-sm-12 text-c-green" style="display: none">Số điểm: 1/10</h6>
                </div>
                <div class="card-block col-sm-12">
                  <h6 class="col-sm-12">Câu hỏi 1: Bạn hãy cho biết HTML là viết tắt của từ khóa nào </h6>
                  <div class="form-radio col-sm-12">
                    <form>
                      <div class="radio radiofill radio-info radio-inline col-sm-12">
                        <label>
                          <input type="radio" name="radio">
                          <i class="helper"></i>A) Hyper Text Markup Language
                        </label>
                      </div>
                      <div class="radio radiofill radio-info radio-inline col-sm-12">
                        <label>
                          <input type="radio" name="radio">
                          <i class="helper"></i>B) Hyper Text Manager Language
                        </label>
                      </div>
                      <div class="radio radiofill radio-info radio-inline col-sm-12">
                        <label>
                          <input type="radio" name="radio">
                          <i class="helper"></i>C) Hyperlink Text Markup Language
                        </label>
                      </div>
                      <div class="radio radiofill radio-info radio-inline col-sm-12">
                        <label>
                          <input type="radio" name="radio">
                          <i class="helper"></i>D) HTTP Text Markup Language
                        </label>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-sm-12">
                  <h6 class="col-sm-12">Câu hỏi 1: Bạn hãy cho biết HTML là viết tắt của từ khóa nào </h6>
                  <div class="card col-sm-12" style="white-space: normal; padding: 0">
                    <div class="card-header" style="text-align: left">
                      <h5>Đáp án của bạn</h5>
                    </div>
                    <div class="card-block">
                      <div id="header" style="text-align: left; padding-left: 20px; padding-top: 10px">
                        <div id="headerRight">
                          <div contenteditable="true">
                            <p>
                              Nhập câu trả lời
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer col-sm-12" style="text-align: center">
                  <button class="btn btn-info btn-round waves-effect waves-light">Nộp bài</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('script')
  <script type="text/javascript" src="{{asset('assets/js/form-validation.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/validate.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/underscore-min.js')}}"></script>
@endsection
