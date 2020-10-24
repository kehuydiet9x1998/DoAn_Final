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
              <form action="{{ route('courses.store')}}" method="post">
                @csrf
                <div class="card-block">
                  <div class="form-steps-form">
                    <div class="form-step-bar">
                      <div class="step-item step-item-active">
                        <div class="step-icon">1</div>
                        <div class="step-text">Thông tin chung</div>
                      </div>

                      <div class="step-item">
                        <div class="step-icon">2</div>
                        <div class="step-text">Bài giảng</div>
                      </div>
                    </div>


                    <div class="form-steps-content-summary">
                      <!-- Step 1 -->
                      <div class="form-step-content">
                        <div class="contact-form">


                          <div class="contact-form-item contact-form-submit">
                            <a href="#" class="form-step-button button button-green pop-up-button button-invalid">
                              <span class="text">Tiếp tục</span>
                              <span class="icon arrow-right-icon-white"></span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <!-- END Step 1 -->


                      <!-- Step 3 -->
                      <div class="form-step-content">
                        <h2>3. Thêm bài giảng</h2>


                        <div class="contact-form-item contact-form-submit">
                          <button type="submit" class="btn btn-success">
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
            </form>
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



      alertMessage.html('');

      jQuery('.form-step-content').hide();
      jQuery('.form-step-content').eq(stepContentNext).fadeIn(500);

      //stepBarNext
      jQuery('.step-item').eq(stepContentNext).addClass('step-item-active');

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
