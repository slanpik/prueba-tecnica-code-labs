<nav class="navbar navbar-expand-lg navbar-light color-used ">
    <a class="navbar-brand" href="/">@lang('navbar.test')</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">

      <ul class="navbar-nav">

        <li class="nav-item {{ (Request::is('/') ? 'active' : '') }}">
          <a class="nav-link" href="/">@lang('navbar.home')</a>
        </li>

        <li class="nav-item {{ (Request::is('create-imc') ? 'active' : '') }}">
          <a class="nav-link" href="{{ route('user.createIMC')}} ">@lang('navbar.create')</a>
        </li>

        <li class="nav-item {{ (Request::is('historical-imc') ? 'active' : '') }}">
          <a class="nav-link" href="{{ route('user.showHistorical')}} ">@lang('navbar.historical')</a>
        </li>

        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">@lang('navbar.logout')</a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
          </li>
      </ul>
    </div>
  </nav>