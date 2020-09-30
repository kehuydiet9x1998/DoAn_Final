
@extends('layouts.guest-master')

@section('content')
  
  <div class="row">

    <div class="col-lg-4">&nbsp;</div>

    <div class="col-lg-4">
      <div class="card">
        <div class="card-header">
          <h5>Login</h5>
        </div>
        <div class="card-block">

          @if(Session::has('AUTH_AUTHENTICATED'))
            {!! __html::alert('danger', Session::get('AUTH_AUTHENTICATED')) !!}
          @endif

          @if(Session::has('AUTH_UNACTIVATED'))
            {!! __html::alert('danger', Session::get('AUTH_UNACTIVATED')) !!}
          @endif

          @if(Session::has('CHECK_UNAUTHENTICATED'))
            {!! __html::alert('danger', Session::get('CHECK_UNAUTHENTICATED')) !!}
          @endif

          @if(Session::has('CHECK_NOT_LOGGED_IN'))
            {!! __html::alert('danger', Session::get('CHECK_NOT_LOGGED_IN')) !!}
          @endif

          @if(Session::has('CHECK_NOT_ACTIVE'))
            {!! __html::alert('danger', Session::get('CHECK_NOT_ACTIVE')) !!}
          @endif

          @if(Session::has('PROFILE_UPDATE_USERNAME_SUCCESS'))
            {!! __html::alert('success', Session::get('PROFILE_UPDATE_USERNAME_SUCCESS')) !!}
          @endif

          @if(Session::has('PROFILE_UPDATE_PASSWORD_SUCCESS'))
            {!! __html::alert('success', Session::get('PROFILE_UPDATE_PASSWORD_SUCCESS')) !!}
          @endif

          <form method="POST" action="{{ route('auth.login') }}">

            @csrf

            <div class="form-group row {{ $errors->has('username') ? ' has-danger' : '' }}">
              <label class="col-sm-3 col-form-label">Username</label>
              <div class="col-sm-9">
                <input type="text" class="form-control {{ $errors->has('username') ? ' form-control-danger' : '' }}" placeholder="Username" name="username" id="username" 
                value="{{ __sanitize::html_attribute_encode(old('username')) }}">
                @if ($errors->has('username'))
                  <div class="col-form-label">{{ $errors->first('username') }}</div>
                @endif
              </div>
            </div>

            <div class="form-group row {{ $errors->has('password') ? ' has-danger' : '' }}">
              <label class="col-sm-3 col-form-label">Password</label>
              <div class="col-sm-9">
                <input type="password" class="form-control {{ $errors->has('password') ? ' form-control-danger' : '' }}" placeholder="Password" name="password" id="password">
                @if ($errors->has('password'))
                  <div class="col-form-label">{{ $errors->first('password') }}</div>
                @endif
              </div>
            </div>

            <button type="submit" class="btn btn-primary waves-effect waves-light btn-sm">Sign in</button>

          </form>

        </div>
      </div>
    </div>

    <div class="col-lg-4">&nbsp;</div>

  </div>

@endsection

