@extends('backend.layout.index')

<link rel="stylesheet" href="{{asset('/assets/css/jquery.filer.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/jquery.filer-dragdropbox-theme.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/pages.css')}}">

<style>
  .button {
    display: inline-block;
    padding: 10px 25px;
    color: white;
    border-radius: 30px;
    text-decoration: none;
  }

  .button-green {
    color: white;
    background: #39dc94;
  }

  .form-steps-form {
    display: inline-block;
    float: left;
    width: 100%;
  }


  .form-step-bar {
    display: inline-block;
    width: 100%;
    float: left;
    margin-bottom: 30px;
  }

  .step-item {
    float: left;
    display: inline-block;
    margin-right: 20px;
    cursor: pointer;
  }

  .step-icon {
    width: 25px;
    height: 25px;
    border-radius: 50%;
    display: inline-block;
    background: rgba(128, 128, 128, 0.5);
    margin-right: 5px;
    float: left;
    text-align: center;
    color: white;
    padding: 5px;
    font-size: 0.8rem;
  }

  .step-text {
    float: left;
    display: inline-block;
    margin-top: 2px;
  }

  .step-item-active .step-icon {
    background: #39dc94;
  }

  .step-item-active .step-text {
    color: #39dc94;
  }

  .form-step-content {
    display: none;
    width: 100%;

  }

  .form-step-content:first-child {
    display: inline-block;
  }

  .step-alert {
    color: #D94040;
  }
.contact-form-item{
  margin: 5px;
}
  .step-required {
    position: absolute;
    right: 15px;
    top: 20px;
    width: 10px;
    height: 10px;
    background: red;
    border-radius: 50%;
  }

  .button-next {
    padding: 15px 20px;
    background: #39dc94;
    width: auto;
    display: inline-block;
    border-radius: 20px;
    color: white;
    float: right;
    cursor: pointer;
  }

</style>


@section('css')


@endsection
@section('content')

  <div class="pcoded-inner-content">
    <div class="main-body">
      <div class="page-wrapper">
        <div class="page-body">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>THÊM HỌC SINH</h5>
                </div>
                <div class="card-block">
                  <div class="form-steps-form">
                    <div class="form-step-bar">
                      <div class="step-item step-item-active">
                        <div class="step-icon">1</div>
                        <div class="step-text">Thông tin chung</div>
                      </div>
                      <div class="step-item">
                        <div class="step-icon">2</div>
                        <div class="step-text">Hình ảnh khóa học</div>
                      </div>
                      <div class="step-item">
                        <div class="step-icon">3</div>
                        <div class="step-text">Bài giảng</div>
                      </div>
                    </div>


                    <div class="form-steps-content-summary">
                      <!-- Step 1 -->
                      <div class="form-step-content">
                        <div class="contact-form">
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tên khóa học</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" value="{{$khoahoc->tenkhoahoc}}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Loại khóa học</label>
                            <div class="col-sm-10">
                              <select name="select" class="form-control fill">
                                @foreach($loaikhoahoc as $lkh)
                                <option @if($khoahoc->loai_khoa_hoc_id == $lkh->id) {{"selected"}} @endif
                                        value="{{$lkh->id}}">{{$lkh->tenloaikhoahoc}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Level</label>
                            <div class="col-sm-10">
                              <select name="select" class="form-control fill">
                                @foreach($level as $lv)
                                <option @if($khoahoc->level_id == $lv->id) {{"selected"}} @endif value="{{$lv->id}}">{{$lv->tenlevel}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Học phí</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" value="{{$khoahoc->hocphi}}">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Độ tuổi</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" value="{{$khoahoc->dotuoi}}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Sĩ số tối đa</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" value="{{$khoahoc->sisotoida}}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Điều kiện học</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" value="{{$khoahoc->dieukienhoc}}">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Mô tả</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" value="{{$khoahoc->mota}}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nội dung</label>
                            <div class="col-sm-10">
                              <textarea rows="5" cols="5" class="form-control">{{$khoahoc->noidung}}</textarea>
                            </div>
                          </div>

                          <div class="contact-form-item contact-form-submit">
                            <a href="#" class="form-step-button button button-green pop-up-button button-invalid">
                              <span class="text">Tiếp tục</span>
                              <span class="icon arrow-right-icon-white"></span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <!-- END Step 1 -->

                      <!-- Step 2 -->
                      <div class="form-step-content">
                        <div class="contact-form">

                          <form action="https://colorlib.com/polygon/admindek/files/assets/pages/file-upload/file-upload.php" class="dropzone dz-clickable" id="drop-form">

                            <div class="fallback">
                              <input name="file" type="file" multiple />
                            </div>

                          </form>
                          <div class="text-center m-t-20">
                            <button class="btn btn-primary">Tải lên</button>
                          </div>


                          <div class="contact-form-item contact-form-submit">
                            <a href="#" class="form-step-button button button-green pop-up-button button-invalid">
                              <span class="text">Tiếp tục</span>
                              <span class="icon arrow-right-icon-white"></span>
                            </a>
                          </div>
                        </div>
                        <!-- END Step 2 -->
                      </div>

                      <!-- Step 3 -->
                      <div class="form-step-content">
                        <h5>3. Thông tin bài giảng</h5>
                        <div class="contact-form">
                          <div class="contact-form-item">
                            <input type="text" name="" placeholder="Naam...">
                          </div>
                          <div class="contact-form-item">
                            <input type="text" name="" placeholder="E-mail...">
                          </div>
                          <div class="contact-form-item">
                            <input type="text" name="" placeholder="Adres...">
                          </div>
                          <div class="contact-form-item">
                            <input type="text" name="" placeholder="Postcode...">
                          </div>

                          <div class="contact-form-item contact-form-submit">
                            <a href="#" class="form-step-button button button-green pop-up-button button-invalid">
                              <span class="text">Hoàn tất</span>
                              <span class="icon arrow-right-icon-white"></span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <!-- END Step 3 -->


                      <div class="step-alert"></div>

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
  <input type="file" multiple="multiple" class="dz-hidden-input" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;">

@endsection


@section('script')


  <script src="{{asset('assets/js/dropzone-amd-module.min.js')}}">
  </script>



  <script>
    jQuery(document).ready(function() {
      jQuery(document).on('click', '.form-step-button', function() {
        var valid = false;
        var alertMessage = jQuery('.step-alert');
        var _this = jQuery(this);
        var _thisClass = _this.hasClass('button-invalid');
        var stepContent = _this.closest('.form-step-content').index();
        var stepContentNext = _this.closest('.form-step-content').index() + 1;

        // Loop through the fields
        jQuery(".form-step-content").eq(stepContent).find('input, select').each(function() {
          var fieldsValue = jQuery(this).val();

          if (fieldsValue == "") {
            valid = true;
            // jQuery(this).after('<span class="step-required"></span>');
          }
          if (fieldsValue != "") {
            // jQuery(this).find('.step-required').remove();
          }
        });

        // Set boolean true if all not is empty
        if (valid == true) {
          _this.addClass('button-invalid');
          _thisClass = true;
        } else {
          _this.removeClass('button-invalid');
          _thisClass = false;
        }

        // Alert message / Hide and show the content
        if (_thisClass == true) {
          alertMessage.html('Điền đầy đủ thông tin để tiếp tục');
          _this.addClass('button-bouncing');
        } else {
          alertMessage.html('');

          jQuery('.form-step-content').hide();
          jQuery('.form-step-content').eq(stepContentNext).fadeIn(500);

          //stepBarNext
          jQuery('.step-item').eq(stepContentNext).addClass('step-item-active');
        }
      });

      // Step bar
      jQuery(document).on('click', '.step-item-active', function() {
        var _this = jQuery(this);
        var index = _this.index();
        var hideNext = index + 1;

        // Set content
        jQuery('.form-step-content').hide();
        jQuery('.form-step-content').eq(index).fadeIn(500);

        // Set sidebar
        jQuery(_this).nextAll().removeClass('step-item-active');

      });

    });

  </script>
@endsection
