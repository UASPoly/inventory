<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Rental Management System</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .navbar {
      background-color: #007bff;
    }

    .navbar-brand {
      color: #fff;
      font-size: 24px;
    }

    .welcome-container {
      text-align: center;
      padding: 100px 20px;
    }

    h1 {
      color: #007bff;
    }

    p {
      font-size: 18px;
      margin-top: 20px;
      color: #495057;
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
  <a class="navbar-brand" href="#">RMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#testimonials">Testimonials</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#footer">Contact</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container welcome-container">
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <div class="card">
    <div class="card-body shadow">
    <img src="{{asset('images/logo.jpg')}}" alt="" width="150" height="150">
        {{$slot}}
    </div>
    </div>
    
    </div>
    <div class="col-md-3"></div>
    </div>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
