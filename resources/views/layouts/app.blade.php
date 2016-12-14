<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'CRM') }}</title>
  <!-- Styles -->
  <!-- Semantic UI stylesheets !-->
  <link rel="stylesheet" href="{{ elixir('assets/css/application.css') }}">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Semantic UI Javascript files !-->
  <script src="{{ elixir('assets/js/application.js') }}"></script>
  <script>
  window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
  </script>
</head>

<body>
  <div>
    <nav class="blue-grey darken-2">
      <div class="nav-wrapper container">
        <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Another CRM') }}</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
          @if (Auth::guest())
          <li><a href="{{ url('/login') }}">Login</a></li>
          <li><a href="{{ url('/register') }}">Register</a></li>
          <!-- Dropdown Trigger -->
          @else
          <li><a href="{{ route('customers.index') }}">View Customers</a></li>
          <li><a href="{{ route('customers.create') }}">Add Customers</a></li>
          <li>
            <a class='dropdown-button btn' href='#' data-activates='dropdown1'>My Profile</a>
            <!-- Dropdown Trigger -->
  
          </li>
          @endif
        </ul>
        <!-- Dropdown Structure -->
        <ul id='dropdown1' class='dropdown-content'>
          <li>
            <a href="#!">
              My Profile
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="{{ url('/logout') }}" onclick="e.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </li>
        </ul>
      </div>
    </nav>
    
    @yield('content')
  
  </div>
</body>

</html>

