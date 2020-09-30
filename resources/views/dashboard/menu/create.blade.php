@extends('layouts.admin-master')

@section('content')

<section class="content-header">
    <h1>Create Menu</h1>
</section>

<section class="content">
            
    <div class="box">
        
      <div class="box-header with-border">
        <h3 class="box-title">Form</h3>
        <div class="pull-right">
            <code>Fields with asterisks(*) are required</code>
        </div> 
      </div>
      
      <form method="POST" autocomplete="off" action="{{ route('dashboard.menu.store') }}">

        <div class="box-body">

          <div class="col-md-11">
                  
            @csrf    

            {!! __form::textbox(
              '4', 'name', 'text', 'Name *', 'Name', old('name'), $errors->has('name'), $errors->first('name'), ''
            ) !!}

            {!! __form::textbox(
              '4', 'route', 'text', 'Route *', 'Route', old('route'), $errors->has('route'), $errors->first('route'), ''
            ) !!}

            {!! __form::textbox(
              '4', 'icon', 'text', 'Icon *', 'Icon', old('icon'), $errors->has('icon'), $errors->first('icon'), ''
            ) !!}

            <div class="col-md-12"></div>

            {!! __form::select_static(
              '4', 'is_menu', 'Is Menu *', old('is_menu'), ['1' => 'true', '0' => 'false'], $errors->has('is_menu'), $errors->first('is_menu'), '', ''
            ) !!}
            
            {!! __form::select_static(
              '4', 'is_dropdown', 'Is Dropdown *', old('is_dropdown'), ['1' => 'true', '0' => 'false'], $errors->has('is_dropdown'), $errors->first('is_dropdown'), '', ''
            ) !!}

          </div>


          {{-- USER MENU DYNAMIC TABLE GRID --}}
          <div class="col-md-12" style="padding-top:50px;">
            <div class="box box-solid">
              <div class="box-header with-border">
                <h3 class="box-title">Submenu</h3>
                <button id="add_row" type="button" class="btn btn-sm bg-green pull-right">Add Row &nbsp;<i class="fa fw fa-plus"></i></button>
              </div>
              
              <div class="box-body no-padding">
                
                <table class="table table-bordered">

                  <tr>
                    <th>Name *</th>
                    <th>Route *</th>
                    <th>Is Nav *</th>
                    <th style="width: 40px"></th>
                  </tr>

                  <tbody id="table_body">


                    @if(old('row'))

                      @foreach(old('row') as $key => $value)

                        <tr>

                          <td>
                            <div class="form-group">
                              <input type="text" name="row[{{ $key }}][sub_name]" class="form-control" placeholder="Name" value="{{ $value['sub_name'] }}">
                              <small class="text-danger">{{ $errors->first('row.'. $key .'.sub_name') }}</small>
                            </div>
                          </td>


                          <td>
                            <div class="form-group">
                              <input type="text" name="row[{{ $key }}][sub_route]" class="form-control" placeholder="Route" value="{{ $value['sub_route'] }}">
                              <small class="text-danger">{{ $errors->first('row.'. $key .'.sub_route') }}</small>
                            </div>
                          </td>


                          <td>
                            <div class="form-group">
                              <select name="row[{{ $key }}][sub_is_nav]" class="form-control">
                                <option value="">Select</option>
                                  <option value="true" {!! $value['sub_is_nav'] == "true" ? 'selected' : '' !!}>1</option>
                                  <option value="false" {!! $value['sub_is_nav'] == "false" ? 'selected' : '' !!}>0</option>
                              </select>
                              <small class="text-danger">{{ $errors->first('row.'. $key .'.sub_is_nav') }}</small>
                            </div>
                          </td>


                          <td>
                              <button id="delete_row" type="button" class="btn btn-sm bg-red"><i class="fa fa-times"></i></button>
                          </td>

                        </tr>

                      @endforeach

                    @endif

                    </tbody>
                </table>
               
              </div>

            </div>
          </div>

        </div>

        <div class="box-footer">
          <button type="submit" class="btn btn-default">Save <i class="fa fa-fw fa-save"></i></button>
        </div>

      </form>

    </div>

</section>

@endsection





@section('modals')

  @if(Session::has('MENU_CREATE_SUCCESS'))

    {!! __html::modal(
      'menu_create', '<i class="fa fa-fw fa-check"></i> Saved!', Session::get('MENU_CREATE_SUCCESS')
    ) !!}
  
  @endif

@endsection 






@section('scripts')

  <script type="text/javascript">

    @if(Session::has('MENU_CREATE_SUCCESS'))
      $('#menu_create').modal('show');
    @endif


    {{-- ADD ROW --}}
    $(document).ready(function() {
      $("#add_row").on("click", function() {
        var i = $("#table_body").children().length;
        var content ='<tr>' +
                        '<td>' +
                          '<div class="form-group">' +
                            '<input type="text" name="row[' + i + '][sub_name]" class="form-control" placeholder="Name">' +
                          '</div>' +
                        '</td>' +

                        '<td>' +
                          '<div class="form-group">' +
                            '<input type="text" name="row[' + i + '][sub_route]" class="form-control" placeholder="Route">' +
                          '</div>' +
                        '</td>' +

                        '<td>' +
                          '<div class="form-group">' +
                            '<select name="row[' + i + '][sub_is_nav]" class="form-control">' +
                              '<option value="">Select</option>' +
                              '<option value="true">1</option>' +
                              '<option value="false">0</option>' +
                            '</select>' +
                          '</div>' +
                        '</td>' +

                        '<td>' +
                            '<button id="delete_row" type="button" class="btn btn-sm bg-red"><i class="fa fa-times"></i></button>' +
                        '</td>' +

                      '</tr>';
        $("#table_body").append($(content));
      });
    });



  </script>
    
@endsection