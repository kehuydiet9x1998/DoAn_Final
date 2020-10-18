@extends('backend.layout.index')
@section('content')
<div class="pcoded-inner-content">
  <div class="main-body">
    <div class="page-wrapper">
      <div class="page-body">
        <div class="row">
          <div class="col-md-12">
            <div class="card table-card">
              <div class="card-header">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <h5>THEO DÕI LỚP HỌC</h5>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6" style="display: flex; align-items: center">
                    <label>Chọn ngày dạy:
                      <input type="date" style="margin: 0 10px;">
                    </label>
                    <label>Chọn thời gian :
                      <input type="time" style="margin: 0 10px;">
                    </label>
                    <button class="btn btn-primary btn-round waves-effect waves-light" style="height: 35px;line-height: 13px; text-align: center;margin-top: 10px">
                      <label style="margin-left: -4px">Lọc</label>
                    </button>
                  </div>
                </div>
              </div>
              <div class="card-block">
                <div class="table-responsive">
                  <table class="table table-hover m-b-0" id="table">
                    <thead>
                      <tr>
                        <th>MÃ LỚP</th>
                        <th>THỜI GIAN</th>
                        <th>NGÀY DẠY</th>
                        <th>MÃ GIÁO VIÊN</th>
                        <th>TÊN GIÁO VIÊN</th>
                        <th>THỜI GIAN CHECK-IN</th>
                        <th>TRẠNG THÁI</th>
                        <th>ACTION</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>LP - 001</td>
                        <td>16:00 - 18:00</td>
                        <td>11/10/2020</td>
                        <td>GV - 001</td>
                        <td>Nguyễn Văn Linh</td>
                        <td>30 phút trước</td>
                        <td><label class="badge badge-inverse-primary">Chờ xác nhận</label></td>
                        <td>
                          <div class="form-radio m-b-30" style="margin: -10px 0px 0px 0px">
                            <form>
                              <div class="radio radiofill radio-primary radio-inline">
                                <label>
                                  <input type="radio" name="radio" checked="checked">
                                  <i class="helper"></i>
                                </label>
                              </div>
                              <div class="radio radiofill radio-default radio-inline">
                                <label>
                                  <input type="radio" name="radio" checked="checked">
                                  <i class="helper"></i>
                                </label>
                              </div>
                              <div class="radio radiofill radio-success radio-inline">
                                <label>
                                  <input type="radio" name="radio" checked="checked">
                                  <i class="helper"></i>
                                </label>
                              </div>
                              <div class="radio radiofill radio-warning radio-inline">
                                <label>
                                  <input type="radio" name="radio" checked="checked">
                                  <i class="helper"></i>
                                </label>
                              </div>
                            </form>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>LP - 002</td>
                        <td>16:00 - 18:00</td>
                        <td>11/10/2020</td>
                        <td>GV - 001</td>
                        <td>Nguyễn Văn Hoan</td>
                        <td>30 phút trước</td>
                        <td><label class="badge badge-success">Check-in đúng giờ</label></td>
                        <td>
                          <div class="form-radio m-b-30" style="margin: -10px 0px 0px 0px;">
                            <form>
                              <div class="radio radiofill radio-primary radio-inline">
                                <label>
                                  <input type="radio" name="radio" checked="checked">
                                  <i class="helper"></i>
                                </label>
                              </div>
                              <div class="radio radiofill radio-default radio-inline">
                                <label>
                                  <input type="radio" name="radio" checked="checked">
                                  <i class="helper"></i>
                                </label>
                              </div>
                              <div class="radio radiofill radio-success radio-inline">
                                <label>
                                  <input type="radio" name="radio" checked="checked">
                                  <i class="helper"></i>
                                </label>
                              </div>
                              <div class="radio radiofill radio-warning radio-inline">
                                <label>
                                  <input type="radio" name="radio" checked="checked">
                                  <i class="helper"></i>
                                </label>
                              </div>
                            </form>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>LP - 003</td>
                        <td>16:00 - 18:00</td>
                        <td>11/10/2020</td>
                        <td>GV - 002</td>
                        <td>Phạm Quang Cường</td>
                        <td>30 phút trước</td>
                        <td><label class="badge badge-inverse-warning">Chech-in muộn</label></td>
                        <td>
                          <div class="form-radio m-b-30" style="margin: -10px 0px 0px 0px;">
                            <form>
                              <div class="radio radiofill radio-primary radio-inline">
                                <label>
                                  <input type="radio" name="radio" checked="checked">
                                  <i class="helper"></i>
                                </label>
                              </div>
                              <div class="radio radiofill radio-default radio-inline">
                                <label>
                                  <input type="radio" name="radio" checked="checked">
                                  <i class="helper"></i>
                                </label>
                              </div>
                              <div class="radio radiofill radio-success radio-inline">
                                <label>
                                  <input type="radio" name="radio" checked="checked">
                                  <i class="helper"></i>
                                </label>
                              </div>
                              <div class="radio radiofill radio-warning radio-inline">
                                <label>
                                  <input type="radio" name="radio" checked="checked">
                                  <i class="helper"></i>
                                </label>
                              </div>
                            </form>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>LP - 001</td>
                        <td>16:00 - 18:00</td>
                        <td>11/10/2020</td>
                        <td>GV - 001</td>
                        <td>Phạm Thanh Hải</td>
                        <td>30 phút trước</td>
                        <td><label class="badge badge-inverse-default">Không chech-in</label></td>
                        <td>
                          <div class="form-radio m-b-30" style="margin: -10px 0px 0px 0px;">
                            <form>
                              <div class="radio radiofill radio-primary radio-inline">
                                <label>
                                  <input type="radio" name="radio" checked="checked">
                                  <i class="helper"></i>
                                </label>
                              </div>
                              <div class="radio radiofill radio-default radio-inline">
                                <label>
                                  <input type="radio" name="radio" checked="checked">
                                  <i class="helper"></i>
                                </label>
                              </div>
                              <div class="radio radiofill radio-success radio-inline">
                                <label>
                                  <input type="radio" name="radio" checked="checked">
                                  <i class="helper"></i>
                                </label>
                              </div>
                              <div class="radio radiofill radio-warning radio-inline">
                                <label>
                                  <input type="radio" name="radio" checked="checked">
                                  <i class="helper"></i>
                                </label>
                              </div>
                            </form>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div>
                </div>
                {{-- phân trang--}}
                {{-- <div class="card-block" style="border-top: 1px solid #cccccc; padding-bottom: 10px; text-align: center">--}}
                {{-- <div style="padding-top: 10px; display: inline-block">--}}
                {{-- {{$students->links('vendor.pagination.bootstrap-4')}}--}}
                {{-- </div>--}}
                {{-- </div>--}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
