@extends('layouts.admin-master')

@section('content')

<section class="content-header">
    <h1>Profile</h1>
</section>

<section class="content">

  <div class="row">

    <div class="col-md-3">

      <div class="box box-default">
        <div class="box-body box-profile">
          <img class="profile-user-img img-responsive img-circle" src="{{asset('images/avatar.jpeg')}}" alt="User profile picture">

          <h3 class="profile-username text-center">{{ Auth::check() ? Auth::user()->fullname : '' }}</h3>

          <p class="text-muted text-center">{{ Auth::check() ? Auth::user()->position : '' }}</p>

        </div>
      </div>

    </div>


    <div class="col-md-9">

      <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">User Details</h3>
        </div>

        <div class="box-body">

          <strong><i class="fa fa-user margin-r-5"></i> Firstname</strong>
          <p class="text-muted">{{ Auth::user()->firstname }}</p>

          <strong><i class="fa fa-user margin-r-5"></i> Middlename</strong>
          <p class="text-muted">{{ Auth::user()->middlename }}</p>

          <strong><i class="fa fa-user margin-r-5"></i> Lastname</strong>
          <p class="text-muted">{{ Auth::user()->lastname }}</p>

          <strong><i class="fa fa-male margin-r-5"></i> Position</strong>
          <p class="text-muted">{{ Auth::user()->position }}</p>

          <strong><i class="fa fa-envelope margin-r-5"></i> Email</strong>
          <p class="text-muted">{{ Auth::user()->email }}</p>

          <hr>

          {{-- Account Settings --}}

          <h4>Account Settings</h4>
          <hr>

          {!! __html::alert('warning', '<i class="icon fa fa-info"></i> Note!', 'You will be logout from the system after you save changes.') !!}   


          {{-- USERNAME SETTINGS --}}

          <div class="panel box box-default">
            <div class="box-header with-border" data-toggle="collapse" data-parent="#accordion" href="#username_bar">
              <h4 class="box-title">
                <span>
                  Username
                </span>
              </h4>
            </div>
            <div id="username_bar" class="panel-collapse collapse {{ $errors->has('username') ? 'in' : '' }}">
              <div class="box-body">

                <form class="form-horizontal" method="POST" autocomplete="off" action="{{ route('dashboard.profile.update_account_username', Auth::user()->slug) }}">

                  @csrf

                  <input name="_method" value="PATCH" type="hidden">

                  {!! __form::textbox_inline(
                      'username', 'text', 'Username', 'Username', old('username') ? old('username') : Auth::user()->username, $errors->has('username') || Session::has('PROFILE_USERNAME_EXIST'), $errors->first('username'), ''
                  ) !!}

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default">Save Changes</button>
                    </div>
                  </div>

                </form>

              </div>
            </div>
          </div>


          {{-- PASSWORD SETTINGS --}}

          <div class="panel box box-default">
            <div class="box-header with-border" data-toggle="collapse" data-parent="#accordion" href="#password_bar">
              <h4 class="box-title">
                <span>
                  Password
                </span>
              </h4>
            </div>
            <div id="password_bar" class="panel-collapse collapse {{ Session::has('PROFILE_OLD_PASSWORD_FAIL') || $errors->has('password') ? 'in' : '' }}">
              <div class="box-body">

                @if(Session::has('PROFILE_OLD_PASSWORD_FAIL'))
                  {!! __html::alert('danger', '<i class="icon fa fa-ban"></i> Alert!', Session::get('PROFILE_OLD_PASSWORD_FAIL')) !!}
                @endif

                <form class="form-horizontal" method="POST" autocomplete="off" action="{{ route('dashboard.profile.update_account_password', Auth::user()->slug) }}">

                  @csrf

                  <input name="_method" value="PATCH" type="hidden">

                  {!! __form::password_inline(
                      'old_password', 'Old Password', 'Old Password', $errors->has('old_password') || Session::has('PROFILE_OLD_PASSWORD_FAIL'), $errors->first('old_password'), ''
                  ) !!}

                  {!! __form::password_inline(
                      'password', 'New Password', 'New Password', $errors->has('password'), $errors->first('password'), ''
                  ) !!}

                  {!! __form::password_inline(
                      'password_confirmation', 'Confirm New Password', 'Confirm New Password', '', '', ''
                  ) !!}

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default">Save Changes</button>
                    </div>
                  </div>
                
                </form>

              </div>
            </div>
          </div>


          {{-- COLOR SETTINGS --}}

          <div class="panel box box-default">
            <div class="box-header with-border" data-toggle="collapse" data-parent="#accordion" href="#color_scheme_bar">
              <h4 class="box-title">
                <span>
                  Color Scheme
                </span>
              </h4>
            </div>
            <div id="color_scheme_bar" class="panel-collapse collapse {{ $errors->has('color') ? 'in' : '' }}">
              <div class="box-body">

                <form id="profile_update_account_color" method="POST" autocomplete="off" action="{{ route('dashboard.profile.update_account_color', Auth::user()->slug) }}">

                  @csrf

                  <input name="_method" value="PATCH" type="hidden">

                  {!! __form::select_static(
                    '4', 'color', 'Color Scheme', old('color') ? old('color') : Auth::user()->color, __static::user_colors(), $errors->has('color'), $errors->first('color'), '', ''
                  ) !!}

                  <div class="form-group">
                    <div style="margin-top:24px;" class="col-sm-8">
                      <button type="submit" class="btn btn-default">Save Changes</button>
                    </div>
                  </div>

                </form>

              </div>
            </div>
          </div>


          {{-- Activity --}}
          <hr>
          <h4>Activity</h4>
          <hr>

          <strong><i class="fa fa-clock-o "></i> Last Login Time</strong>
          <p class="text-muted">{{ __dataType::date_parse(Auth::user()->last_login_time, 'M d, Y h:i A') }}</p>
      
          <strong><i class="fa  fa-desktop margin-r-5"></i> Last Login Machine</strong>
          <p class="text-muted">{{ Auth::user()->last_login_machine }}</p>
         

          <strong><i class="fa  fa-asterisk margin-r-5"></i> Last Login Local IP</strong>
          <p class="text-muted">{{ Auth::user()->last_login_ip }}</p>

      </div>

    </div>

  </div>

</section>

@endsection






@section('scripts')

  <script type="text/javascript">
    
    {!! __js::show_password('old_password', 'show_old_password') !!}
    {!! __js::show_password('password', 'show_password') !!}
    {!! __js::show_password('password_confirmation', 'show_password_confirmation') !!}

    {{-- PROFILE ACCOUNT COLOR SUCCESS --}}
    @if(Session::has('PROFILE_UPDATE_COLOR_SUCCESS'))
      {!! __js::toast(Session::get('PROFILE_UPDATE_COLOR_SUCCESS')) !!}
    @endif

  </script>
  
@endsection