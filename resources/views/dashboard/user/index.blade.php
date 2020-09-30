
<?php

  $table_sessions = [ 
                      Session::get('USER_UPDATE_SUCCESS_SLUG'), 
                      Session::get('USER_ACTIVATE_SUCCESS_SLUG'),
                      Session::get('USER_DEACTIVATE_SUCCESS_SLUG'),
                      Session::get('USER_LOGOUT_SUCCESS_SLUG'),
                      Session::get('USER_RESET_PASSWORD_SUCCESS_SLUG'), 
                      Session::get('USER_SYNC_EMPLOYEE_SUCCESS_SLUG'),  
                      Session::get('USER_UNSYNC_EMPLOYEE_SUCCESS_SLUG'), 
                    ];

  $appended_requests = [
                        'q'=> Request::get('q'), 
                        'sort' => Request::get('sort'),
                        'direction' => Request::get('direction'),

                        'ol' => Request::get('ol'), 
                        'a' => Request::get('a'),
                      ];

  $span_check = '<span class="badge bg-green"><i class="fa fa-check "></i></span>';
  $span_times = '<span class="badge bg-red"><i class="fa fa-times "></i></span>';

?>





@extends('layouts.admin-master')

@section('content')
    
  <section class="content-header">
      <h1>User List</h1>
  </section>

  <section class="content">
    
    {{-- Form Start --}}
    <form data-pjax class="form" id="filter_form" method="GET" autocomplete="off" action="{{ route('dashboard.user.index') }}">

    {{-- Advance Filters --}}
    {!! __html::filter_open() !!}

      {!! __form::select_static_for_filter(
        '2', 'ol', 'Login Status', old('ol'), ['Online' => 'true', 'Offline' => 'false'], 'submit_user_filter', '', ''
      ) !!}

      {!! __form::select_static_for_filter(
        '2', 'a', 'User Status', old('a'), ['Active' => 'true', 'Inactive' => 'false'], 'submit_user_filter', '', ''
      ) !!}

    {!! __html::filter_close('submit_user_filter') !!}


    <div class="box" id="pjax-container" style="overflow-x:auto;">

      {{-- Table Search --}}        
      <div class="box-header with-border">
        {!! __html::table_search(route('dashboard.user.index')) !!}
      </div>

    {{-- Form End --}}  
    </form>

      {{-- Table Grid --}}        
      <div class="box-body no-padding">
        <table class="table table-hover">
          <tr>
            <th>@sortablelink('username', 'Username')</th>
            <th>@sortablelink('firstname', 'Name')</th>
            <th>@sortablelink('is_online', 'Online')</th>
            <th>@sortablelink('is_active', 'Active')</th>
            <th style="width: 150px">Action</th>
          </tr>
          @foreach($users as $data) 
            <tr {!! __html::table_highlighter( $data->slug, $table_sessions)!!}>
              <td>{{ $data->username }}</td>
              <td>{{ $data->fullname }}</td>
              <td>{!! $data->is_online == 1 ?  $span_check : $span_times !!}</td>
              <td>{!! $data->is_active == 1 ? $span_check : $span_times !!}</td>
              <td>
                <select id="action" class="form-control input-md">
                  <option value="">Select</option>
                  <option data-type="1" data-url="{{ route('dashboard.user.show', $data->slug) }}">Details</option>
                  <option data-type="1" data-url="{{ route('dashboard.user.edit', $data->slug) }}">Edit</option>
                  <option data-type="0" data-action="delete" data-url="{{ route('dashboard.user.destroy', $data->slug) }}">Delete</option>
                  
                  @if($data->is_active == 1 && $data->is_online == 1)
                    <option data-type="0" data-action="logout" data-url="{{ route('dashboard.user.logout', $data->slug) }}">Logout</option>
                  @endif 
                  
                  @if($data->is_active == 0)
                    <option data-type="0" data-action="activate" data-url="{{ route('dashboard.user.activate', $data->slug) }}">Activate</option>
                  @else
                    <option data-type="0" data-action="deactivate" data-url="{{ route('dashboard.user.deactivate', $data->slug) }}">Deactivate</option>
                  @endif

                  <option data-type="1" data-action="reset_password" data-url="{{ route('dashboard.user.reset_password', $data->slug) }}">Reset Password</option>

                </select>
              </td>
            </tr>
            @endforeach
          </table>
      </div>

      @if($users->isEmpty())
        <div style="padding :5px;">
          <center><h4>No Records found!</h4></center>
        </div>
      @endif

      <div class="box-footer">
        {!! __html::table_counter($users) !!}
        {!! $users->appends($appended_requests)->render('vendor.pagination.bootstrap-4')!!}
      </div>

    </div>

  </section>

  <form id="from_user_logout" method="POST" style="display: none;">
    @csrf
  </form>

  <form id="from_user_activate" method="POST" style="display: none;">
    @csrf
  </form>

  <form id="from_user_deactivate" method="POST" style="display: none;">
    @csrf
  </form>

@endsection






@section('modals')

  {!! __html::modal_delete('user_delete') !!}

@endsection 






@section('scripts')

  <script type="text/javascript">

    {{-- CALL CONFIRM DELETE MODAL --}}
    {!! __js::modal_confirm_delete_caller('user_delete') !!}


    {{-- CALL LOGOUT FORM --}}
    {!! __js::form_submitter_via_action('logout', 'from_user_logout') !!}


    {{-- CALL ACTIVATE FORM --}}
    {!! __js::form_submitter_via_action('activate', 'from_user_activate') !!}


    {{-- CALL DEACTIVATE FORM --}}
    {!! __js::form_submitter_via_action('deactivate', 'from_user_deactivate') !!}


    {{-- UPDATE TOAST --}}
    @if(Session::has('USER_UPDATE_SUCCESS'))
      {!! __js::toast(Session::get('USER_UPDATE_SUCCESS')) !!}
    @endif


    {{-- DELETE TOAST --}}
    @if(Session::has('USER_DELETE_SUCCESS'))
      {!! __js::toast(Session::get('USER_DELETE_SUCCESS')) !!}
    @endif


    {{-- LOGOUT TOAST --}}
    @if(Session::has('USER_LOGOUT_SUCCESS'))
      {!! __js::toast(Session::get('USER_LOGOUT_SUCCESS')) !!}
    @endif


    {{-- ACTIVATE TOAST --}}
    @if(Session::has('USER_ACTIVATE_SUCCESS'))
      {!! __js::toast(Session::get('USER_ACTIVATE_SUCCESS')) !!}
    @endif


    {{-- DEACTIVATE TOAST --}}
    @if(Session::has('USER_DEACTIVATE_SUCCESS'))
        {!! __js::toast(Session::get('USER_DEACTIVATE_SUCCESS')) !!}
    @endif


    {{-- RESET PASSWORD SUCCESS TOAST --}}
    @if(Session::has('USER_RESET_PASSWORD_SUCCESS'))
        {!! __js::toast(Session::get('USER_RESET_PASSWORD_SUCCESS')) !!}
    @endif


    {{-- SYNC EMPLOYEE SUCCESS TOAST --}}
    @if(Session::has('USER_SYNC_EMPLOYEE_SUCCESS'))
        {!! __js::toast(Session::get('USER_SYNC_EMPLOYEE_SUCCESS')) !!}
    @endif


    {{-- UNSYNC EMPLOYEE SUCCESS TOAST --}}
    @if(Session::has('USER_UNSYNC_EMPLOYEE_SUCCESS'))
        {!! __js::toast(Session::get('USER_UNSYNC_EMPLOYEE_SUCCESS')) !!}
    @endif

  </script>
    
@endsection