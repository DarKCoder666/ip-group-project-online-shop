<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="resources/saas/app.css'">
  <title>Laravel</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.4/ofi.min.js"></script>
  <style>
  .jumbotron-fluid {
    background-image: url("https://img5.goodfon.com/original/1366x768/8/9b/wood-chocolate-desert-shokolad-pechene-belyi-molochnyi-chern.jpg");
    background-size: cover;
    height: 100%;
  }             
  .jumbotron{
  background:rgba(0,0,0,0.0001);
  text-align: center;
  }
  .col{
    text-align: center;
  }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="/">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Milka_Logo.svg/1200px-Milka_Logo.svg.png" width="30" height="30" class="d-inline-block align-top" alt="">
     Choco World
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Products
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Hershey's</a>
              <a class="dropdown-item" href="#">Milka</a>
              <a class="dropdown-item" href="#">Mars</a>
              <a class="dropdown-item" href="#">Nestle</a>
              <a class="dropdown-item" href="#">Toblerone</a>
               <a class="dropdown-item" href="#">Lindt</a>
              <a class="dropdown-item" href="#">Ferrero Rocher</a>
              <a class="dropdown-item" href="#">Mondelez</a>
              <a class="dropdown-item" href="#">Crafers</a>
              <a class="dropdown-item" href="#">Millennium</a>
              </div>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">About Us <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Sign In <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Cart <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/contactus">Contact Us</a>
        </li>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Admin
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Manage Users</a>
            <a class="dropdown-item" href="#">Manage Ordes</a>
            <a class="dropdown-item" href="#">Manage Items</a>
            <a class="dropdown-item" href="#">Manage messages</a>
          </div>
        </div>      
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</body></html>