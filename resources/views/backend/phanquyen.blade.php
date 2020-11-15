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

            <div class="card">
              <div class="card-header">
                <h5 class="card-header-text">Phân quyền</h5>
              </div>
              <div class="card-block accordion-block">

                {{-- <div class="container"> --}}

                <div class="row">
                  <div class="col-md-2 mb-3">
                    <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
                      @foreach(\App\Models\Role::all() as $key => $role)
                      <li class="nav-item">
                        <a class="nav-link @if($key == 0) active @endif" id="{{ $role->ten }}-tab" data-toggle="tab" href="#{{ $role->ten }}" role="tab" aria-controls="{{ $role->ten }}" aria-selected="true">{{ ucfirst($role->ten)}}</a>
                      </li>
                      @endforeach
                    </ul>
                  </div>
                  <div class="col-md-10">
                    @if(session()->has('success-message'))
                    <div class='alert alert-success'>
                      {{session('success-message')}}
                    </div>
                    @elseif(session()->has('error-message'))
                    <div class='alert alert-danger'>
                      {{session('error-message')}}
                    </div>
                    @endif
                    <div class="tab-content" id="myTabContent">
                      @foreach(\App\Models\Role::all() as $key => $role)

                      <div class="tab-pane fade show @if($key ==0) active @endif" id="{{ $role->ten }}" role="tabpanel" aria-labelledby="{{ $role->ten }}-tab">
                        <form action="{{ route('role.store') }}" method="post">
                          @csrf
                          <div class="row">

                            <div class="col-md-4">
                              <h5>Quản lý hệ thống</h5>
                              <input type="hidden" name="role_id" value="{{ $role->id }}">
                              @foreach(\App\Models\PermissionGroup::where('column' , 1 )->get() as $key => $pg)
                              <ul class="p-t-10">
                                <li>
                                  <a data-toggle="collapse" data-target="#collapseExampleArea{{ $pg->name .$key }}" href="#collapseExampleArea" aria-expanded="false">
                                    <i style="font-size: 13px" class="fa fa-caret-right mr-1"></i>
                                  </a>
                                  <input type="checkbox" class="main-check">
                                  <label for="short">{{ $pg->name }}</label>
                                  <ul id="collapseExampleArea{{ $pg->name .$key }}" class="collapse">
                                    @foreach($pg->permissions as $permission)
                                    <li>
                                      <input type="checkbox" @if($role->hasPermission($permission)) checked @endif name="{{ $permission->id }}" id="{{ $permission->ten }}">
                                      <label for="{{ $permission->ten }}"> {{ $permission->mota }}</label>
                                    </li>
                                    @endforeach
                                  </ul>
                                </li>
                              </ul>
                              @endforeach
                            </div>
                            <div class="col-md-4">
                              <h5>Tư vấn tuyển sinh</h5>
                              @foreach(\App\Models\PermissionGroup::where('column' , 2 )->get() as $key => $pg)
                              <ul class="p-t-10">
                                <li>
                                  <a data-toggle="collapse" data-target="#collapseExampleArea{{ $pg->name .$key }}" href="#collapseExampleArea" aria-expanded="false">
                                    <i style="font-size: 13px" class="fa fa-caret-right mr-1"></i>
                                  </a>
                                  <input type="checkbox" class="main-check">
                                  <label for="short">{{ $pg->name }}</label>
                                  <ul id="collapseExampleArea{{ $pg->name .$key }}" class="collapse">
                                    @foreach($pg->permissions as $permission)
                                    <li>
                                      <input type="checkbox" @if($role->hasPermission($permission)) checked @endif name="{{ $permission->id }}" id="{{ $permission->ten }}">

                                      <label for="{{ $permission->ten }}"> {{ $permission->mota }}</label>
                                    </li>
                                    @endforeach
                                  </ul>
                                </li>
                              </ul>
                              @endforeach
                            </div>

                            <div class="col-md-4">
                              <h5>Quản lý nhân sự</h5>
                              @foreach(\App\Models\PermissionGroup::where('column' , 3 )->get() as $key => $pg)
                              <ul class="p-t-10">
                                <li>
                                  <a data-toggle="collapse" data-target="#collapseExampleArea{{ $pg->name .$key }}" href="#collapseExampleArea" aria-expanded="false">
                                    <i style="font-size: 13px" class="fa fa-caret-right mr-1"></i>
                                  </a>
                                  <input type="checkbox" class="main-check">
                                  <label for="short">{{ $pg->name }}</label>
                                  <ul id="collapseExampleArea{{ $pg->name .$key }}" class="collapse">
                                    @foreach($pg->permissions as $permission)
                                    <li>
                                      <input type="checkbox" @if($role->hasPermission($permission)) checked @endif name="{{ $permission->id }}" id="{{ $permission->ten }}">
                                      <label for="{{ $permission->ten }}"> {{ $permission->mota }}</label>
                                    </li>
                                    @endforeach
                                  </ul>
                                </li>
                              </ul>
                              @endforeach
                            </div>

                          </div>

                          <div class="row">
                            <div class="col-md-12">
                              <div class="card-footer">
                                <hr>
                                <button class="btn btn-primary float-right m-r-10 m-b-15">Cập nhật</button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>



                      @endforeach

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
