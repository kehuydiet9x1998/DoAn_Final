<?php

  $table_sessions = [ Session::get('MENU_UPDATE_SUCCESS_SLUG') ];

  $appended_requests = [
                        'q'=> Request::get('q'),
                        'sort' => Request::get('sort'),
                        'direction' => Request::get('direction'),
                      ];

?>





@extends('layouts.admin-master')

@section('content')
    
  <section class="content-header">
      <h1>Menu List</h1>
  </section>

  <section class="content">
    
    {{-- Form Start --}}
    <form data-pjax class="form" id="filter_form" method="GET" autocomplete="off" action="{{ route('dashboard.menu.index') }}">

    <div class="box" id="pjax-container" style="overflow-x:auto;">

      {{-- Table Search --}}        
      <div class="box-header with-border">
        {!! __html::table_search(route('dashboard.menu.index')) !!}
      </div>

    {{-- Form End --}}  
    </form>

      {{-- Table Grid --}}        
      <div class="box-body no-padding">
        <table class="table table-hover">
          <tr>
            <th>@sortablelink('name', 'Name')</th>
            <th>@sortablelink('route', 'Route')</th>
            <th>@sortablelink('icon', 'Icon')</th>
            <th style="width: 150px">Action</th>
          </tr>
          @foreach($menus as $data) 
            <tr {!! __html::table_highlighter($data->slug, $table_sessions) !!} >
              <td>{{ $data->name }}</td>
              <td>{{ $data->route }}</td>
              <td><i class="fa {{ $data->icon }}"></i></td>
              <td> 
                <select id="action" class="form-control input-md">
                  <option value="">Select</option>
                  <option data-type="1" data-url="{{ route('dashboard.menu.edit', $data->slug) }}">Edit</option>
                  <option data-type="0" data-action="delete" data-url="{{ route('dashboard.menu.destroy', $data->slug) }}">Delete</option>
                </select>
              </td>
            </tr>
            @endforeach
          </table>
      </div>

      @if($menus->isEmpty())
        <div style="padding :5px;">
          <center><h4>No Records found!</h4></center>
        </div>
      @endif

      <div class="box-footer">
        {!! __html::table_counter($menus) !!}
        {!! $menus->appends($appended_requests)!!}
      </div>

    </div>

  </section>

@endsection





@section('modals')

  {!! __html::modal_delete('menu_delete') !!}

@endsection 





@section('scripts')

  <script type="text/javascript">

    {{-- CALL CONFIRM DELETE MODAL --}}
    {!! __js::modal_confirm_delete_caller('menu_delete') !!}

    {{-- UPDATE TOAST --}}
    @if(Session::has('MENU_UPDATE_SUCCESS'))
      {!! __js::toast(Session::get('MENU_UPDATE_SUCCESS')) !!}
    @endif

    {{-- DELETE TOAST --}}
    @if(Session::has('MENU_DELETE_SUCCESS'))
      {!! __js::toast(Session::get('MENU_DELETE_SUCCESS')) !!}
    @endif

  </script>
    
@endsection