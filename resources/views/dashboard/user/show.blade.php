@extends('layouts.admin-master')

@section('content')

<section class="content-header">
  <h1>User Details</h1>
  <div class="pull-right" style="margin-top: -25px;">
    {!! __html::back_button(['dashboard.user.index']) !!}
  </div>
</section>

<section class="content">
  
  <div class="box">
        
    <div class="box-header with-border">
      <h3 class="box-title">Details</h3>
      <div class="box-tools">
        <a href="{{ route('dashboard.user.edit', $user->slug) }}" class="btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>
      </div>
    </div>

    <div class="box-body">



      <div class="col-md-6">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">User Info</h3>
          </div>
          <div class="box-body">
            <dl class="dl-horizontal">
              <dt>Firstname:</dt>
              <dd>{{ $user->firstname }}</dd>
              <dt>Lastname:</dt>
              <dd>{{ $user->lastname }}</dd>
              <dt>Middlename:</dt>
              <dd>{{ $user->middlename }}</dd>
              <dt>Position:</dt>
              <dd>{{ $user->position }}</dd>
              <dt>Email:</dt>
              <dd>{{ $user->email }}</dd>
              <dt>Username:</dt>
              <dd>{{ $user->username }}</dd>
            </dl>
          </div>
        </div>
      </div> 



      <div class="col-md-6">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">User Activity</h3>
          </div>
          <div class="box-body">
            <dl class="dl-horizontal" style="padding-bottom:60px;">
              <dt>Last Login Time:</dt>
              <dd>{{ __dataType::date_parse($user->last_login_time, 'M d, Y h:i A') }}</dd>
              <dt>Last Login Machine:</dt>
              <dd>{{ $user->last_login_machine }}</dd>
              <dt>Last Login IP:</dt>
              <dd>{{ $user->last_login_ip }}</dd>
            </dl>
          </div>
        </div>
      </div> 



      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">User Modifications</h3>
          </div>
          <div class="box-body">

            <dl class="dl-horizontal col-sm-6">
              <dt>Time Created:</dt>
              <dd>{{ __dataType::date_parse($user->created_at, 'M d, Y h:i A') }}</dd>
              <dt>IP Created:</dt>
              <dd>{{ $user->ip_created }}</dd>
              <dt>User Created:</dt>
              <dd>{{ $user->user_created }}</dd>
            </dl>

            <dl class="dl-horizontal col-sm-6">
              <dt>Time Updated:</dt>
              <dd>{{ __dataType::date_parse($user->updated_at, 'M d, Y h:i A') }}</dd>
              <dt>IP Updated:</dt>
              <dd>{{ $user->ip_updated }}</dd>
              <dt>User Updated:</dt>
              <dd>{{ $user->user_updated }}</dd>
            </dl>

          </div>
        </div>
      </div> 



      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">User Routes</h3>
          </div>
          <div class="box-body">
            <ul>

              @foreach($user->userMenu as $user_menu_data)

                @if($user_menu_data->userSubmenu->isEmpty())
                  <li><b>{{ $user_menu_data->name }}</b></li>
                @else

                <li><b>{{ $user_menu_data->name }}</b>
                  <ul>
                    @foreach($user_menu_data->userSubmenu as $user_submenu_data )
                      <li>{{ $user_submenu_data->name }}</li>
                    @endforeach
                  </ul>
                </li>

                @endif

              @endforeach

            </ul>
          </div>
        </div>
      </div>


    </div>

  </div>

</section>

@endsection
