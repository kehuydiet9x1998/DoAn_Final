@extends('backend.layout.index')
@section('content')

@section('css')
<style>
  /* .expand_caret {
    transform: scale(1.6);
    margin-left: 8px;
    margin-top: -4px;
  }

  a[aria-expanded='false']>.expand_caret {
    transform: scale(1.6) rotate(-90deg);
  } */

</style>

@endsection

<div class="pcoded-inner-content">
  <div class="main-body">
    <div class="page-wrapper">
      <div class="page-body">
        <div class="row">
          <div class="col-sm-12">
            <form action="/test" method="post">
              @csrf
              <div class="card">
                <div class="card-header">
                  <h5 class="card-header-text">Phân quyền</h5>
                </div>
                <div class="card-block accordion-block">

                  {{-- <div class="container"> --}}

                  <div class="row">
                    <div class="col-md-2 mb-3">
                      <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                        </li>
                      </ul>
                    </div>
                    <!-- /.col-md-4 -->
                    <div class="col-md-10">
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                          <div class="row">
                            <div class="col-md-4">
                              <h5>Quản lý hệ thống</h5>
                              @foreach(\App\Models\PermissionGroup::where('column' , 1 )->get() as $key => $pg)
                              <ul class="p-t-10">
                                <li>
                                  <a data-toggle="collapse" data-target="#collapseExampleArea{{ $key }}" href="#collapseExampleArea" aria-expanded="false">
                                    <i style="font-size: 13px" class="fa fa-caret-right mr-1"></i>
                                  </a>
                                  <input type="checkbox" class="main-check">
                                  <label for="short">{{ $pg->name }}</label>
                                  <ul id="collapseExampleArea{{ $key }}" class="collapse">
                                    @foreach($pg->permissions as $permission)
                                    <li>
                                      <input type="checkbox" name="{{ $permission->ten }}" id="{{ $permission->ten }}">
                                      <label for="{{ $permission->ten }}"> {{ $permission->mota }}</label>
                                    </li>
                                    @endforeach
                                  </ul>
                                </li>
                              </ul>
                              @endforeach


                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <hr>
                  <button class="btn btn-primary float-right m-r-10 m-b-15">Cập nhật</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection

@section('script')
<script>
  $('input[type="checkbox"]').change(function(e) {

    var checked = $(this).prop("checked")
      , container = $(this).parent()
      , siblings = container.siblings();

    container.find('input[type="checkbox"]').prop({
      indeterminate: false
      , checked: checked
    });

    function checkSiblings(el) {

      var parent = el.parent().parent()
        , all = true;

      el.siblings().each(function() {
        let returnValue = all = ($(this).children('input[type="checkbox"]').prop("checked") === checked);
        return returnValue;
      });

      if (all && checked) {

        parent.children('input[type="checkbox"]').prop({
          indeterminate: false
          , checked: checked
        });

        checkSiblings(parent);

      } else if (all && !checked) {

        parent.children('input[type="checkbox"]').prop("checked", checked);
        parent.children('input[type="checkbox"]').prop("indeterminate", (parent.find('input[type="checkbox"]:checked').length > 0));
        checkSiblings(parent);

      } else {

        el.parents("li").children('input[type="checkbox"]').prop({
          indeterminate: true
          , checked: false
        });

      }

    }

    checkSiblings(container);
  });


  $('input[type="checkbox"]:not(.main-check)').click();
  $('input[type="checkbox"]:not(.main-check)').click();

</script>

@endsection
