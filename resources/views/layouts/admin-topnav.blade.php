<header class="main-header">
  <a href="#" class="logo">
    <span class="logo-mini">L</span>
    <span class="logo-lg"><b>Laravel AdminLTE</b></span>
  </a>
  <nav class="navbar navbar-static-top">
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{asset('images/avatar.jpeg')}}" class="user-image" alt="User Image">
            @if(Auth::check())
              {{ __sanitize::html_encode(Auth::user()->firstname) }}
            @endif
          </a>
          <ul class="dropdown-menu">
            <li class="user-header">
              <img src="{{asset('images/avatar.jpeg')}}" class="img-circle" alt="User Image">
              <p>
                @if(Auth::check())
                  {{ __sanitize::html_encode(Auth::user()->firstname) .' '. __sanitize::html_encode(Auth::user()->lastname) }}
                  <small>{{ __sanitize::html_encode(Auth::user()->position) }}</small>
                @endif
                
              </p>
            </li>
            <li class="user-footer">
              <div class="pull-left">
                <a href="{{ route('dashboard.profile.details') }}" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a  href="{{ route('auth.logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" class="btn btn-default btn-flat">Sign out</a>
              </div>
              <form id="frm-logout" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>