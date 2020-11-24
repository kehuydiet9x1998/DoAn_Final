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
                    <h5>Danh sách người dùng</h5>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    {{-- <a href="{{ route('user_export') }}" class="btn btn-secondary">Xuất excel</a> --}}
                    @include('backend.administrators.users.add_user')
                  </div>
                </div>
              </div>
              <div class="card-block">
                @if(session()->has('success-message'))
                <div class='alert alert-success'>
                  {{session('success-message')}}
                </div>
                @elseif(session()->has('error-message'))
                <div class='alert alert-danger'>
                  {{session('error-message')}}
                </div>
                @endif
                <div class="table-responsive">
                  <table class="table table-hover m-b-0" id="datatable">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Tên đăng nhập</th>
                        <th>Vai trò</th>
                        <th>Ngày tạo</th>
                        <th>Trạng thái</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $key => $user)
                      <tr>
                        <td>{{$key+1}}</td>
                        <td>
                          <div class="d-inline-block align-middle">
                            @if($user->hocsinh || $user->giaovien || $user->nhanvien)
                            <a href="{{route('trangcanhan', $user->id)}}">
                              <div class="d-inline-block">
                                <div class="row">
                                  <div class="col-md-3">
                                    <img src="{{asset($user->anhdaidien)}}" class="img-fluid rounded-circle"
                                      width="80px" alt="">


                                  </div>
                                  <div class="col-md-8">
                                    <h6 class="name_link_green">
                                      {{strtoupper($user->name)}}
                                    </h6>

                                    <p class="text-muted">
                                      @switch($user->role_id)
                                      @case(1)
                                      @php $obj = $user->nhanvien @endphp
                                      @break
                                      @case(2)
                                      @php $obj = $user->hocsinh @endphp
                                      @break
                                      @case(3)
                                      @php $obj = $user->giaovien @endphp
                                      @break
                                      @case(4)
                                      @php $obj = $user->nhanvien @endphp
                                      @break
                                      @endswitch
                                      {{ optional($obj)->hodem . ' '. optional($obj)->ten }}
                                      @if(!$obj)
                                      <i>Chưa có chủ sở hữu</i>
                                      @endif
                                    </p>

                                  </div>
                                </div>



                              </div>
                            </a>
                            @else
                            <div class="d-inline-block">
                              <div class="row">
                                <div class="col-md-3">
                                  <img src="{{asset($user->anhdaidien)}}" class="img-fluid rounded-circle" width="80px"
                                    alt="">
                                </div>
                                <div class="col-md-8">
                                  <h6>
                                    {{strtoupper($user->name)}}
                                  </h6>

                                  <p class="text-muted">
                                    @switch($user->role_id)
                                    @case(1)
                                    @php $obj = $user->nhanvien @endphp
                                    @break
                                    @case(2)
                                    @php $obj = $user->hocsinh @endphp
                                    @break
                                    @case(3)
                                    @php $obj = $user->giaovien @endphp
                                    @break
                                    @case(4)
                                    @php $obj = $user->nhanvien @endphp
                                    @break
                                    @endswitch
                                    {{ optional($obj)->hodem . ' '. optional($obj)->ten }}
                                    {{-- @if(!$obj)
                                    <i>Chưa có người sở hữu</i>
                                    @endif --}}
                                  </p>

                                </div>
                              </div>
                            </div>
                            @endif
                          </div>

                        </td>
                        <td><label for="" class="badge badge-secondary">{{$user->role->ten}}</label></td>
                        <td>{{$user->created_at}}</td>
                        <td><label for="" class="badge badge-success">{{$user->trangthai}}</label></td>
                        <td style="display: flex; width: 64px;">

                          <div>
                            <button class="my_edit" data-id="{{$user->id}}" data-toggle="modal"
                              data-target="#edit-Modal" style="border: none; background-color: transparent">
                              <i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i>
                            </button>
                            <div class="modal fade show" id="edit-Modal" tabindex="-1" role="dialog"
                              style="z-index: 1050;display: none; padding-right: 17px;">
                            </div>
                          </div>
                          <div>
                            <form action="{{route('users.destroy', $user->id)}}" method="post">
                              @method('DELETE')
                              @csrf
                              <button
                                style="border: none; padding:0px; margin: -1px 0px 0px -15px; background-color: transparent"
                                onclick="return confirm ('Bạn có muốn xóa không')">
                                <i class="feather icon-trash-2 f-w-600 f-16 m-r-15 text-c-red" style="margin:0;">
                                </i>
                              </button>
                            </form>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
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
  function myReset() {
    document.getElementById('main').reset();
  };

</script>

<script>
  $(document).
  ready(function() {
    $('.btn.btn-primary').click(function(e) {
      id = $(this).data('id');
      $('#show-Modal').load("/administrators/users/" + id);
      $('#show-Modal').show();
      $('body').addClass('modal-open');


      $('.modal-backdrop').show();
    });
    $('.my_edit').click(function(e) {
      id = $(this).data('id')
      $('#edit-Modal').load("/administrators/users/" + id + '/edit');
      $('#edit-Modal').show();
      $('body').addClass('modal-open');


      $('.modal-backdrop').show();

    })
  });

</script>

@endsection
