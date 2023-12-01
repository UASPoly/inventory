<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>HRMS! @yield('title')</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .navbar {
      background-color: white;
      border-bottom: 4px solid #007bff;
    }

    .navbar-brand {
      color: #fff;
      font-size: 24px;
    }

    

    h1 {
      color: #007bff;
    }

    p {
      font-size: 18px;
      margin-top: 20px;
      color: #495057;
    }

    ul li a{
        color: #007bff;
    }

    .hero-section {
      background-color: #ffffff;
      padding: 80px 20px;
      text-align: center;
      
    }

    .services-section {
      background-color: #f8f9fa;
      padding: 80px 20px;
      text-align: center;
    }

    .testimonials-section {
      background-color: #ffffff;
      padding: 80px 20px;
      text-align: center;
    }

    .footer-section {
      background-color: #007bff;
      color: #fff;
      padding: 40px 20px;
      text-align: center;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="#"><img src="{{asset('images/logo.jpg')}}" width="80" height="80" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard')}}" style="color: #007bff; font-weight: bold;"><i class="fa fa-dashboard"></i>Home</a>
      </li>
      @if(Auth::user()->role == 'landlord')
        <li class="nav-item">
            <a class="nav-link" href="{{route('property.request.index')}}" style="color: #007bff; font-weight: bold;">{{count(Auth::user()->properyRentRequests())}} Requests</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('property.lease.index')}}" style="color: #007bff; font-weight: bold;">Lease Agreement</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#testimonials" style="color: #007bff; font-weight: bold;">Tenants</a>
        </li>
      @else
        @if(Auth::user()->tenant)
          <li class="nav-item">
              <a class="nav-link" href="#services" style="color: #007bff; font-weight: bold;">{{count(Auth::user()->tenant->rentRequests->where('status', 'pending'))}} Requests</a>
          </li>
        @endif
      @endif
      <li class="nav-item">
        <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout').submit();" style="color: #007bff; font-weight: bold;">Logout</a>
      </li>
      <form action="{{route('logout')}}" method="post" id="logout">@csrf</form>
    </ul>
  </div>
</nav>

<div class="container welcome-container">
    @yield('content')
</div>






<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
