@extends('backend.layout.index')
@section('content')
<div class="page-header card">
  <div class="row align-items-end">
    <div class="col-lg-8">
      <div class="page-header-title">
        <i class="feather icon-home bg-c-blue"></i>
        <div class="d-inline">
          <h5>Dashboard CRM</h5>
          <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="page-header-breadcrumb">
        <ul class=" breadcrumb breadcrumb-title">
          <li class="breadcrumb-item">
            <a href="index.html"><i class="feather icon-home"></i></a>
          </li>
          <li class="breadcrumb-item"><a href="#!">Dashboard CRM</a> </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="pcoded-inner-content">
  <div class="main-body">
    <div class="page-wrapper">
      <div class="page-body">

        <div class="row">

          <div class="col-xl-3 col-md-6">
            <div class="card prod-p-card card-red">
              <div class="card-body">
                <div class="row align-items-center m-b-30">
                  <div class="col">
                    <h6 class="m-b-5 text-white">Total Profit</h6>
                    <h3 class="m-b-0 f-w-700 text-white">$1,783</h3>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-money-bill-alt text-c-red f-18"></i>
                  </div>
                </div>
                <p class="m-b-0 text-white"><span class="label label-danger m-r-10">+11%</span>From Previous Month</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card prod-p-card card-blue">
              <div class="card-body">
                <div class="row align-items-center m-b-30">
                  <div class="col">
                    <h6 class="m-b-5 text-white">Total Orders</h6>
                    <h3 class="m-b-0 f-w-700 text-white">15,830</h3>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-database text-c-blue f-18"></i>
                  </div>
                </div>
                <p class="m-b-0 text-white"><span class="label label-primary m-r-10">+12%</span>From Previous Month</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card prod-p-card card-green">
              <div class="card-body">
                <div class="row align-items-center m-b-30">
                  <div class="col">
                    <h6 class="m-b-5 text-white">Average Price</h6>
                    <h3 class="m-b-0 f-w-700 text-white">$6,780</h3>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-dollar-sign text-c-green f-18"></i>
                  </div>
                </div>
                <p class="m-b-0 text-white"><span class="label label-success m-r-10">+52%</span>From Previous Month</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card prod-p-card card-yellow">
              <div class="card-body">
                <div class="row align-items-center m-b-30">
                  <div class="col">
                    <h6 class="m-b-5 text-white">Product Sold</h6>
                    <h3 class="m-b-0 f-w-700 text-white">6,784</h3>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-tags text-c-yellow f-18"></i>
                  </div>
                </div>
                <p class="m-b-0 text-white"><span class="label label-warning m-r-10">+52%</span>From Previous Month</p>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-12">
            <div class="card latest-update-card">
              <div class="card-header">
                <h5>What’s New</h5>
                <div class="card-header-right">
                  <ul class="list-unstyled card-option">
                    <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                    <li><i class="feather icon-maximize full-card"></i></li>
                    <li><i class="feather icon-minus minimize-card"></i></li>
                    <li><i class="feather icon-refresh-cw reload-card"></i></li>
                    <li><i class="feather icon-trash close-card"></i></li>
                    <li><i class="feather icon-chevron-left open-card-option"></i></li>
                  </ul>
                </div>
              </div>
              <div class="card-block">
                <div class="latest-update-box">
                  <div class="row p-t-20 p-b-30">
                    <div class="col-auto text-right update-meta p-r-0">
                      <img src="/assets/jpg/avatar-4.jpg" alt="user image"
                        class="img-radius img-40 align-top m-r-15 update-icon">
                    </div>
                    <div class="col p-l-5">
                      <a href="#!">
                        <h6>Your Manager Posted.</h6>
                      </a>
                      <p class="text-muted m-b-0">Jonny michel</p>
                    </div>
                  </div>
                  <div class="row p-b-30">
                    <div class="col-auto text-right update-meta p-r-0">
                      <i class="feather icon-briefcase bg-c-red update-icon"></i>
                    </div>
                    <div class="col p-l-5">
                      <a href="#!">
                        <h6>You have 3 pending Task.</h6>
                      </a>
                      <p class="text-muted m-b-0">Hemilton</p>
                    </div>
                  </div>
                  <div class="row p-b-30">
                    <div class="col-auto text-right update-meta p-r-0">
                      <i class="feather icon-check f-w-600 bg-c-green update-icon"></i>
                    </div>
                    <div class="col p-l-5">
                      <a href="#!">
                        <h6>New Order Received.</h6>
                      </a>
                      <p class="text-muted m-b-0">Hemilton</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-auto text-right update-meta p-r-0">
                      <img src="/assets/jpg/avatar-4.jpg" alt="user image"
                        class="img-radius img-40 align-top m-r-15 update-icon">
                    </div>
                    <div class="col p-l-5">
                      <a href="#!">
                        <h6>Your Manager Posted.</h6>
                      </a>
                      <p class="text-muted m-b-0">Jonny michel</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-12">
            <div class="card new-cust-card">
              <div class="card-header">
                <h5>New Customers</h5>
                <div class="card-header-right">
                  <ul class="list-unstyled card-option">
                    <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                    <li><i class="feather icon-maximize full-card"></i></li>
                    <li><i class="feather icon-minus minimize-card"></i></li>
                    <li><i class="feather icon-refresh-cw reload-card"></i></li>
                    <li><i class="feather icon-trash close-card"></i></li>
                    <li><i class="feather icon-chevron-left open-card-option"></i></li>
                  </ul>
                </div>
              </div>
              <div class="card-block">
                <div class="align-middle m-b-35">
                  <img src="/assets/jpg/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                  <div class="d-inline-block">
                    <a href="#!">
                      <h6>Alex Thompson</h6>
                    </a>
                    <p class="text-muted m-b-0">Cheers!</p>
                    <span class="status active"></span>
                  </div>
                </div>
                <div class="align-middle m-b-35">
                  <img src="/assets/jpg/avatar-3.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                  <div class="d-inline-block">
                    <a href="#!">
                      <h6>John Doue</h6>
                    </a>
                    <p class="text-muted m-b-0">stay hungry stay foolish!</p>
                    <span class="status active"></span>
                  </div>
                </div>
                <div class="align-middle m-b-35">
                  <img src="/assets/jpg/avatar-3.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                  <div class="d-inline-block">
                    <a href="#!">
                      <h6>Alex Thompson</h6>
                    </a>
                    <p class="text-muted m-b-0">Cheers!</p>
                    <span class="status deactive text-mute"><i class="far fa-clock m-r-10"></i>30 min ago</span>
                  </div>
                </div>
                <div class="align-middle m-b-0">
                  <img src="/assets/jpg/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                  <div class="d-inline-block">
                    <a href="#!">
                      <h6>Alex Thompson</h6>
                    </a>
                    <p class="text-muted m-b-0">Cheers!</p>
                    <span class="status active"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="col-xl-4 col-md-12">
            <div class="card comp-card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">
                    <h6 class="m-b-25">Impressions</h6>
                    <h3 class="f-w-700 text-c-blue">1,563</h3>
                    <p class="m-b-0">May 23 - June 01 (2017)</p>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-eye bg-c-blue"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="card comp-card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">
                    <h6 class="m-b-25">Goal</h6>
                    <h3 class="f-w-700 text-c-green">30,564</h3>
                    <p class="m-b-0">May 23 - June 01 (2017)</p>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-bullseye bg-c-green"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="card comp-card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">
                    <h6 class="m-b-25">Impact</h6>
                    <h3 class="f-w-700 text-c-yellow">42.6%</h3>
                    <p class="m-b-0">May 23 - June 01 (2017)</p>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-hand-paper bg-c-yellow"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="col-xl-4 col-md-6">
            <div class="card o-hidden">
              <div class="card-header">
                <h5>Total Leads</h5>
              </div>
              <div class="card-block">
                <div class="row">
                  <div class="col-4">
                    <p class="text-muted m-b-5">Overall</p>
                    <h6>68.52%</h6>
                  </div>
                  <div class="col-4">
                    <p class="text-muted m-b-5">Monthly</p>
                    <h6>28.90%</h6>
                  </div>
                  <div class="col-4">
                    <p class="text-muted m-b-5">Day</p>
                    <h6>13.50%</h6>
                  </div>
                </div>
              </div>
              <div id="sal-income" style="height: 100px; padding: 0px; position: relative;"><canvas class="flot-base"
                  style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 335.333px; height: 100px;"
                  width="335" height="100"></canvas>
                <div class="flot-text"
                  style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                  <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;">
                    <div
                      style="position: absolute; max-width: 47px; top: 100px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: center;">
                      0.0</div>
                    <div
                      style="position: absolute; max-width: 47px; top: 100px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 64px; text-align: center;">
                      2.5</div>
                    <div
                      style="position: absolute; max-width: 47px; top: 100px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 129px; text-align: center;">
                      5.0</div>
                    <div
                      style="position: absolute; max-width: 47px; top: 100px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 193px; text-align: center;">
                      7.5</div>
                    <div
                      style="position: absolute; max-width: 47px; top: 100px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 258px; text-align: center;">
                      10.0</div>
                    <div
                      style="position: absolute; max-width: 47px; top: 100px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 322px; text-align: center;">
                      12.5</div>
                  </div>
                  <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;">
                    <div
                      style="position: absolute; top: 100px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">
                      0</div>
                    <div
                      style="position: absolute; top: 67px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">
                      10</div>
                    <div
                      style="position: absolute; top: 33px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">
                      20</div>
                    <div
                      style="position: absolute; top: 0px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">
                      30</div>
                  </div>
                </div><canvas class="flot-overlay"
                  style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 335.333px; height: 100px;"
                  width="335" height="100"></canvas>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="card o-hidden">
              <div class="card-header">
                <h5>Total Vendors</h5>
              </div>
              <div class="card-block">
                <div class="row">
                  <div class="col-4">
                    <p class="text-muted m-b-5">Overall</p>
                    <h6>68.52%</h6>
                  </div>
                  <div class="col-4">
                    <p class="text-muted m-b-5">Monthly</p>
                    <h6>28.90%</h6>
                  </div>
                  <div class="col-4">
                    <p class="text-muted m-b-5">Day</p>
                    <h6>13.50%</h6>
                  </div>
                </div>
              </div>
              <div id="rent-income" style="height: 100px; padding: 0px; position: relative;"><canvas class="flot-base"
                  style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 335.333px; height: 100px;"
                  width="335" height="100"></canvas>
                <div class="flot-text"
                  style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                  <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;">
                    <div
                      style="position: absolute; max-width: 47px; top: 100px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: center;">
                      0.0</div>
                    <div
                      style="position: absolute; max-width: 47px; top: 100px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 64px; text-align: center;">
                      2.5</div>
                    <div
                      style="position: absolute; max-width: 47px; top: 100px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 129px; text-align: center;">
                      5.0</div>
                    <div
                      style="position: absolute; max-width: 47px; top: 100px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 193px; text-align: center;">
                      7.5</div>
                    <div
                      style="position: absolute; max-width: 47px; top: 100px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 258px; text-align: center;">
                      10.0</div>
                    <div
                      style="position: absolute; max-width: 47px; top: 100px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 322px; text-align: center;">
                      12.5</div>
                  </div>
                  <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;">
                    <div
                      style="position: absolute; top: 100px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">
                      0</div>
                    <div
                      style="position: absolute; top: 67px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">
                      10</div>
                    <div
                      style="position: absolute; top: 33px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">
                      20</div>
                    <div
                      style="position: absolute; top: 0px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">
                      30</div>
                  </div>
                </div><canvas class="flot-overlay"
                  style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 335.333px; height: 100px;"
                  width="335" height="100"></canvas>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-12">
            <div class="card o-hidden">
              <div class="card-header">
                <h5>Invoice Generate</h5>
              </div>
              <div class="card-block">
                <div class="row">
                  <div class="col-4">
                    <p class="text-muted m-b-5">Overall</p>
                    <h6>68.52%</h6>
                  </div>
                  <div class="col-4">
                    <p class="text-muted m-b-5">Monthly</p>
                    <h6>28.90%</h6>
                  </div>
                  <div class="col-4">
                    <p class="text-muted m-b-5">Day</p>
                    <h6>13.50%</h6>
                  </div>
                </div>
              </div>
              <div id="income-analysis" style="height: 100px; padding: 0px; position: relative;"><canvas
                  class="flot-base"
                  style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 335.333px; height: 100px;"
                  width="335" height="100"></canvas>
                <div class="flot-text"
                  style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                  <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;">
                    <div
                      style="position: absolute; max-width: 47px; top: 100px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: center;">
                      0.0</div>
                    <div
                      style="position: absolute; max-width: 47px; top: 100px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 64px; text-align: center;">
                      2.5</div>
                    <div
                      style="position: absolute; max-width: 47px; top: 100px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 129px; text-align: center;">
                      5.0</div>
                    <div
                      style="position: absolute; max-width: 47px; top: 100px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 193px; text-align: center;">
                      7.5</div>
                    <div
                      style="position: absolute; max-width: 47px; top: 100px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 258px; text-align: center;">
                      10.0</div>
                    <div
                      style="position: absolute; max-width: 47px; top: 100px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 322px; text-align: center;">
                      12.5</div>
                  </div>
                  <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;">
                    <div
                      style="position: absolute; top: 100px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">
                      0</div>
                    <div
                      style="position: absolute; top: 67px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">
                      10</div>
                    <div
                      style="position: absolute; top: 33px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">
                      20</div>
                    <div
                      style="position: absolute; top: 0px; font: 400 0px / 0px open sans, sans-serif; color: transparent; left: 0px; text-align: right;">
                      30</div>
                  </div>
                </div><canvas class="flot-overlay"
                  style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 335.333px; height: 100px;"
                  width="335" height="100"></canvas>
              </div>
            </div>
          </div>


          <div class="col-xl-8 col-md-12">
            <div class="card latest-update-card">
              <div class="card-header">
                <h5>Latest Activity</h5>
                <div class="card-header-right">
                  <ul class="list-unstyled card-option">
                    <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                    <li><i class="feather icon-maximize full-card"></i></li>
                    <li><i class="feather icon-minus minimize-card"></i></li>
                    <li><i class="feather icon-refresh-cw reload-card"></i></li>
                    <li><i class="feather icon-trash close-card"></i></li>
                    <li><i class="feather icon-chevron-left open-card-option"></i></li>
                  </ul>
                </div>
              </div>
              <div class="card-block">
                <div class="latest-update-box">
                  <div class="row p-t-20 p-b-30">
                    <div class="col-auto text-right update-meta">
                      <i class="feather icon-sunrise bg-c-blue update-icon"></i>
                    </div>
                    <div class="col">
                      <h6>John Deo</h6>
                      <p class="text-muted m-b-15">The trip was an amazing and a life changing experience!!</p>
                      <img src="/assets/jpg/01.jpg" alt="" class="img-fluid img-100 m-r-15 m-b-10">
                      <img src="/assets/jpg/03.jpg" alt="" class="img-fluid img-100 m-r-15 m-b-10">
                    </div>
                  </div>
                  <div class="row p-b-30">
                    <div class="col-auto text-right update-meta">
                      <i class="feather icon-file-text bg-c-blue update-icon"></i>
                    </div>
                    <div class="col">
                      <h6>Administrator</h6>
                      <p class="text-muted m-b-0">Free courses for all our customers at A1 Conference Room - 9:00 am
                        tomorrow!</p>
                    </div>
                  </div>
                  <div class="row p-b-30">
                    <div class="col-auto text-right update-meta">
                      <i class="feather icon-map-pin bg-c-blue update-icon"></i>
                    </div>
                    <div class="col">
                      <h6>Jeny William</h6>
                      <p class="text-muted m-b-15">Happy Hour! Free drinks at <span> <a href="#!"
                            class="text-c-blue">Cafe-Bar all </a> </span>day long!</p>
                      <div id="markers-map" style="height: 245px; width: 100%; position: relative; overflow: hidden;">
                        <div
                          style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                          <div
                            style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"
                            class="gm-style">
                            <div
                              style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;"
                              tabindex="0">
                              <div
                                style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px);">
                                <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                  <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                    <div
                                      style="position: absolute; z-index: 985; transform: matrix(1, 0, 0, 1, -120, -119);">
                                      <div
                                        style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;">
                                        <div style="width: 256px; height: 256px;"></div>
                                      </div>
                                      <div
                                        style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;">
                                        <div style="width: 256px; height: 256px;"></div>
                                      </div>
                                      <div
                                        style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;">
                                        <div style="width: 256px; height: 256px;"></div>
                                      </div>
                                      <div
                                        style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;">
                                        <div style="width: 256px; height: 256px;"></div>
                                      </div>
                                      <div
                                        style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;">
                                        <div style="width: 256px; height: 256px;"></div>
                                      </div>
                                      <div
                                        style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;">
                                        <div style="width: 256px; height: 256px;"></div>
                                      </div>
                                      <div
                                        style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px;">
                                        <div style="width: 256px; height: 256px;"></div>
                                      </div>
                                      <div
                                        style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px;">
                                        <div style="width: 256px; height: 256px;"></div>
                                      </div>
                                      <div
                                        style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px;">
                                        <div style="width: 256px; height: 256px;"></div>
                                      </div>
                                      <div
                                        style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px;">
                                        <div style="width: 256px; height: 256px;"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                                <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                  <div
                                    style="width: 27px; height: 43px; overflow: hidden; position: absolute; left: -14px; top: -43px; z-index: 0;">
                                    <img
                                      style="position: absolute; left: 0px; top: 0px; width: 27px; height: 43px; user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"
                                      alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi2.png"
                                      draggable="false"></div>
                                  <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                    <div
                                      style="position: absolute; z-index: 985; transform: matrix(1, 0, 0, 1, -120, -119);">
                                      <div
                                        style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;">
                                      </div>
                                      <div
                                        style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 0px;">
                                      </div>
                                      <div
                                        style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: -256px;">
                                      </div>
                                      <div
                                        style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: -256px;">
                                      </div>
                                      <div
                                        style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: -256px;">
                                      </div>
                                      <div
                                        style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 0px;">
                                      </div>
                                      <div
                                        style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 0px;">
                                      </div>
                                      <div
                                        style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: -256px;">
                                      </div>
                                      <div
                                        style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: -256px;">
                                      </div>
                                      <div
                                        style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 0px;">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                  <div
                                    style="position: absolute; z-index: 985; transform: matrix(1, 0, 0, 1, -120, -119);">
                                    <div
                                      style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                      <img
                                        style="width: 256px; height: 256px; user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"
                                        draggable="false" alt="" role="presentation"
                                        src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i23016!3i14405!4i256!2m3!1e0!2sm!3i527247784!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=96594">
                                    </div>
                                    <div
                                      style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                      <img
                                        style="width: 256px; height: 256px; user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"
                                        draggable="false" alt="" role="presentation"
                                        src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i23017!3i14404!4i256!2m3!1e0!2sm!3i527247784!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=57967">
                                    </div>
                                    <div
                                      style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                      <img
                                        style="width: 256px; height: 256px; user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"
                                        draggable="false" alt="" role="presentation"
                                        src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i23016!3i14404!4i256!2m3!1e0!2sm!3i527247784!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=60900">
                                    </div>
                                    <div
                                      style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                      <img
                                        style="width: 256px; height: 256px; user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"
                                        draggable="false" alt="" role="presentation"
                                        src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i23015!3i14404!4i256!2m3!1e0!2sm!3i527247784!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=63833">
                                    </div>
                                    <div
                                      style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                      <img
                                        style="width: 256px; height: 256px; user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"
                                        draggable="false" alt="" role="presentation"
                                        src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i23015!3i14405!4i256!2m3!1e0!2sm!3i527247784!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=99527">
                                    </div>
                                    <div
                                      style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                      <img
                                        style="width: 256px; height: 256px; user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"
                                        draggable="false" alt="" role="presentation"
                                        src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i23014!3i14404!4i256!2m3!1e0!2sm!3i527247604!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=48836">
                                    </div>
                                    <div
                                      style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                      <img
                                        style="width: 256px; height: 256px; user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"
                                        draggable="false" alt="" role="presentation"
                                        src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i23014!3i14405!4i256!2m3!1e0!2sm!3i527247736!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=96141">
                                    </div>
                                    <div
                                      style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                      <img
                                        style="width: 256px; height: 256px; user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"
                                        draggable="false" alt="" role="presentation"
                                        src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i23017!3i14405!4i256!2m3!1e0!2sm!3i527247784!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=93661">
                                    </div>
                                    <div
                                      style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                      <img
                                        style="width: 256px; height: 256px; user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"
                                        draggable="false" alt="" role="presentation"
                                        src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i23018!3i14405!4i256!2m3!1e0!2sm!3i527247748!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=9334">
                                    </div>
                                    <div
                                      style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                      <img
                                        style="width: 256px; height: 256px; user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"
                                        draggable="false" alt="" role="presentation"
                                        src="https://maps.google.com/maps/vt?pb=!1m5!1m4!1i15!2i23018!3i14404!4i256!2m3!1e0!2sm!3i527247748!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=104711">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div
                                style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;"
                                class="gm-style-pbc">
                                <p class="gm-style-pbt"></p>
                              </div>
                              <div
                                style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                                <div
                                  style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px);">
                                  <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;">
                                  </div>
                                  <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;">
                                  </div>
                                  <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;">
                                    <div
                                      style="width: 27px; height: 43px; overflow: hidden; position: absolute; opacity: 0; left: -14px; top: -43px; z-index: 0;">
                                      <img
                                        style="position: absolute; left: 0px; top: 0px; width: 27px; height: 43px; user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"
                                        alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi2.png"
                                        draggable="false" usemap="#gmimap0"><map name="gmimap0" id="gmimap0"><area
                                          log="miw" coords="13.5,0,4,3.75,0,13.5,13.5,43,27,13.5,23,3.75" shape="poly"
                                          title="Marker with InfoWindow"
                                          style="cursor: pointer; touch-action: none;"></map></div>
                                  </div>
                                  <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;">
                                  </div>
                                </div>
                              </div>
                            </div><iframe aria-hidden="true" tabindex="-1"
                              style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: medium none;"
                              frameborder="0"></iframe>
                            <div
                              style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                              <a style="position: static; overflow: visible; float: none; display: inline;"
                                target="_blank" rel="noopener"
                                href="https://maps.google.com/maps?ll=21.233433,72.866472&amp;z=15&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3"
                                title="Open this area in Google Maps (opens a new window)">
                                <div style="width: 66px; height: 26px; cursor: pointer;"><img
                                    style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px none; padding: 0px; margin: 0px;"
                                    alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google4.png"
                                    draggable="false"></div>
                              </a></div>
                            <div
                              style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-sizing: border-box; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 300px; height: 180px; position: absolute; left: 311px; top: 33px;">
                              <div style="padding: 0px 0px 10px; font-size: 16px; box-sizing: border-box;">Map Data
                              </div>
                              <div style="font-size: 13px;">Map data ©2020</div><button
                                style="background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; display: block; border: 0px none; margin: 0px; padding: 0px; position: absolute; cursor: pointer; user-select: none; top: 0px; right: 0px; width: 37px; height: 37px;"
                                draggable="false" title="Close" aria-label="Close" type="button"
                                class="gm-ui-hover-effect"><img
                                  src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                  style="pointer-events: none; display: block; width: 13px; height: 13px; margin: 12px;"></button>
                            </div>
                            <div class="gmnoprint"
                              style="z-index: 1000001; position: absolute; right: 258px; bottom: 0px; width: 87px;">
                              <div draggable="false" style="user-select: none; height: 14px; line-height: 14px;"
                                class="gm-style-cc">
                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                  <div style="width: 1px;"></div>
                                  <div
                                    style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                                  </div>
                                </div>
                                <div
                                  style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                  <a style="text-decoration: none; cursor: pointer; display: none;">Map
                                    Data</a><span>Map data ©2020</span></div>
                              </div>
                            </div>
                            <div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;">
                              <div
                                style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">
                                Map data ©2020</div>
                            </div>
                            <div class="gmnoprint gm-style-cc"
                              style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 95px; bottom: 0px;"
                              draggable="false">
                              <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                <div style="width: 1px;"></div>
                                <div
                                  style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                                </div>
                              </div>
                              <div
                                style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                <a style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);"
                                  href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank"
                                  rel="noopener">Terms of Use</a></div>
                            </div><button
                              style="background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; margin: 10px; padding: 0px; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; top: 0px; right: 0px;"
                              draggable="false" title="Toggle fullscreen view" aria-label="Toggle fullscreen view"
                              type="button" class="gm-control-active gm-fullscreen-control"><img
                                style="height: 18px; width: 18px;"
                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%20018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A"><img
                                style="height: 18px; width: 18px;"
                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A"><img
                                style="height: 18px; width: 18px;"
                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A"></button>
                            <div draggable="false"
                              style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"
                              class="gm-style-cc">
                              <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                <div style="width: 1px;"></div>
                                <div
                                  style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                                </div>
                              </div>
                              <div
                                style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                <a target="_blank" rel="noopener"
                                  title="Report errors in the road map or imagery to Google"
                                  style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;"
                                  href="https://www.google.com/maps/@21.2334329,72.866472,15z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3">Report
                                  a map error</a></div>
                            </div>
                            <div class="gmnoprint gm-bundled-control"
                              style="margin: 10px; user-select: none; position: absolute; left: 0px; top: 0px;"
                              draggable="false" controlwidth="40" controlheight="81">
                              <div class="gmnoprint" style="position: absolute; left: 0px; top: 0px;" controlwidth="40"
                                controlheight="81">
                                <div draggable="false"
                                  style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;">
                                  <button
                                    style="background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; display: block; border: 0px none; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"
                                    draggable="false" title="Zoom in" aria-label="Zoom in" type="button"
                                    class="gm-control-active"><img style="height: 18px; width: 18px;"
                                      src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23666%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A"><img
                                      style="height: 18px; width: 18px;"
                                      src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23333%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A"><img
                                      style="height: 18px; width: 18px;"
                                      src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23111%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A"></button>
                                  <div
                                    style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;">
                                  </div><button
                                    style="background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; display: block; border: 0px none; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"
                                    draggable="false" title="Zoom out" aria-label="Zoom out" type="button"
                                    class="gm-control-active"><img style="height: 18px; width: 18px;"
                                      src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A"><img
                                      style="height: 18px; width: 18px;"
                                      src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A"><img
                                      style="height: 18px; width: 18px;"
                                      src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A"></button>
                                </div>
                              </div>
                            </div>
                            <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom"
                              style="margin: 10px; user-select: none; position: absolute; display: none; bottom: 14px; right: 0px;"
                              draggable="false" controlwidth="0" controlheight="0">
                              <div style="position: absolute; left: 0px; top: 0px;"></div>
                              <div class="gmnoprint" controlwidth="40" controlheight="40"
                                style="display: none; position: absolute;">
                                <div style="width: 40px; height: 40px;"><button
                                    style="background: rgb(255, 255, 255) none repeat scroll 0% 0%; display: none; border: 0px none; margin: 0px 0px 32px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;"
                                    draggable="false" title="Rotate map 90 degrees" aria-label="Rotate map 90 degrees"
                                    type="button" class="gm-control-active"><img style="height: 18px; width: 18px;"
                                      src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A"><img
                                      style="height: 18px; width: 18px;"
                                      src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A"><img
                                      style="height: 18px; width: 18px;"
                                      src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A"></button><button
                                    style="background: rgb(255, 255, 255) none repeat scroll 0% 0%; display: block; border: 0px none; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;"
                                    draggable="false" title="Tilt map" aria-label="Tilt map" type="button"
                                    class="gm-tilt gm-control-active"><img style="width: 18px;"
                                      src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A"><img
                                      style="width: 18px;"
                                      src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A"><img
                                      style="width: 18px;"
                                      src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A"></button>
                                </div>
                              </div>
                            </div>
                            <div
                              style="position: absolute; user-select: none; height: 14px; line-height: 14px; right: 166px; bottom: 0px;"
                              draggable="false" class="gm-style-cc">
                              <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                <div style="width: 1px;"></div>
                                <div
                                  style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                                </div>
                              </div>
                              <div
                                style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                <span>200 m&nbsp;</span>
                                <div
                                  style="position: relative; display: inline-block; height: 8px; bottom: -1px; width: 49px;">
                                  <div style="width: 100%; height: 4px; position: absolute; left: 0px; top: 0px;"></div>
                                  <div
                                    style="width: 4px; height: 8px; left: 0px; top: 0px; background-color: rgb(255, 255, 255);">
                                  </div>
                                  <div
                                    style="width: 4px; height: 8px; position: absolute; background-color: rgb(255, 255, 255); right: 0px; bottom: 0px;">
                                  </div>
                                  <div
                                    style="position: absolute; background-color: rgb(102, 102, 102); height: 2px; left: 1px; bottom: 1px; right: 1px;">
                                  </div>
                                  <div
                                    style="position: absolute; width: 2px; height: 6px; left: 1px; top: 1px; background-color: rgb(102, 102, 102);">
                                  </div>
                                  <div
                                    style="width: 2px; height: 6px; position: absolute; background-color: rgb(102, 102, 102); bottom: 1px; right: 1px;">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div
                          style="background-color: white; font-weight: 500; font-family: Roboto, sans-serif; padding: 15px 25px; box-sizing: border-box; top: 5px; border: 1px solid rgba(0, 0, 0, 0.12); border-radius: 5px; left: 50%; max-width: 375px; position: absolute; transform: translateX(-50%); width: calc(100% - 10px); z-index: 1;">
                          <div><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google_gray.svg"
                              style="padding: 0px; margin: 0px; border: 0px none; height: 17px; vertical-align: middle; width: 52px; user-select: none;"
                              draggable="false"></div>
                          <div style="line-height: 20px; margin: 15px 0px;"><span
                              style="color: rgba(0, 0, 0, 0.87); font-size: 14px;">This page can't load Google Maps
                              correctly.</span></div>
                          <table style="width: 100%;">
                            <tr>
                              <td style="line-height: 16px; vertical-align: middle;"><a
                                  href="https://developers.google.com/maps/documentation/javascript/error-messages?utm_source=maps_js&amp;utm_medium=degraded&amp;utm_campaign=keyless#api-key-and-billing-errors"
                                  target="_blank" rel="noopener" style="color: rgba(0, 0, 0, 0.54); font-size: 12px;">Do
                                  you own this website?</a></td>
                              <td style="text-align: right;"><button class="dismissButton">OK</button></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-right">
                  <a href="#!" class=" b-b-primary text-primary">View all Activity</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-12">
            <div class="card chat-card">
              <div class="card-header">
                <h5>Chat history</h5>
                <div class="card-header-right">
                  <ul class="list-unstyled card-option">
                    <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                    <li><i class="feather icon-maximize full-card"></i></li>
                    <li><i class="feather icon-minus minimize-card"></i></li>
                    <li><i class="feather icon-refresh-cw reload-card"></i></li>
                    <li><i class="feather icon-trash close-card"></i></li>
                    <li><i class="feather icon-chevron-left open-card-option"></i></li>
                  </ul>
                </div>
              </div>
              <div class="card-block">
                <div class="row m-b-20 received-chat">
                  <div class="col-auto p-r-0">
                    <img src="/assets/jpg/avatar-2.jpg" alt="user image" class="img-radius img-40">
                  </div>
                  <div class="col">
                    <div class="msg">
                      <p class="m-b-0">Nice to meet you!</p>
                    </div>
                    <p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>10:20am</p>
                  </div>
                </div>
                <div class="row m-b-20 send-chat">
                  <div class="col">
                    <div class="msg">
                      <p class="m-b-0">Nice to meet you!</p>
                    </div>
                    <p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>10:20am</p>
                  </div>
                  <div class="col-auto p-l-0">
                    <img src="/assets/jpg/avatar-3.jpg" alt="user image" class="img-radius img-40">
                  </div>
                </div>
                <div class="row m-b-20 received-chat">
                  <div class="col-auto p-r-0">
                    <img src="/assets/jpg/avatar-2.jpg" alt="user image" class="img-radius img-40">
                  </div>
                  <div class="col">
                    <div class="msg">
                      <p class="m-b-0">Nice to meet you!</p>
                      <img src="/assets/jpg/01.jpg" alt="">
                      <img src="/assets/jpg/03.jpg" alt="">
                    </div>
                    <p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>10:20am</p>
                  </div>
                </div>
                <div class="row m-b-20 send-chat">
                  <div class="col">
                    <div class="msg">
                      <p class="m-b-0">Come now to meet you!</p>
                    </div>
                    <p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>10:20am</p>
                  </div>
                  <div class="col-auto p-l-0">
                    <img src="/assets/jpg/avatar-3.jpg" alt="user image" class="img-radius img-40">
                  </div>
                </div>
                <div class="row m-b-20 received-chat">
                  <div class="col-auto p-r-0">
                    <img src="/assets/jpg/avatar-2.jpg" alt="user image" class="img-radius img-40">
                  </div>
                  <div class="col">
                    <div class="msg">
                      <p class="m-b-0">Nice to meet you!</p>
                      <img src="/assets/jpg/03.jpg" alt="">
                    </div>
                    <p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>10:20am</p>
                  </div>
                </div>
                <div class="right-icon-control">
                  <div class="input-group input-group-button">
                    <input type="text" class="form-control" placeholder="Send message">
                    <div class="input-group-append">
                      <button class="btn btn-primary waves-effect waves-light" type="button"><i
                          class="feather icon-message-circle"></i></button>
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
