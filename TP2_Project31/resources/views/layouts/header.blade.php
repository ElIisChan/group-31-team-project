<!DOCTYPE html>
<html lang="en">
<head>
<link rel = "stylesheet" href="{{asset ('/front-end/app.css')}}" />
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="{{asset ('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css')}}">

   

</head>
<body>

<html>
<head>
<link rel="stylesheet" href="{{asset ('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
   
<!-- header section starts  -->

<header class="main-header">

      <a href="{{('homepage') }}" class="logo"> G.V.D.</a>
   <nav class="navbar">
      <div id="close-navbar" class="fas fa-times"></div> <!-- allows the user to select the page they want using the navigation bar at the top -->
      <a href="{{('homepage') }} ">Home</a>
      <a href="{{('aboutus') }} ">About Us</a>
      <a href="{{('products') }}">Products</a>
      <a href="{{('contactus') }}">Contact Us</a>
      <!-- <a href="{{('basket') }}"><i class="fa fa-shopping-basket" aria-hidden="true"></i> -->
      <a href="{{route('login') }}" class="link">Login</a> 
      <a href="{{route('register') }}" class="link">Register</a>
      
        <!-- <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> -->
      

        @if (Route::has('login'))
             @auth

         <a href="{{('basket') }}"><i class="fa fa-shopping-basket" aria-hidden="true"></i>
         <a href="{{ url('/logout') }}" class="link">Logout</a>

        @endif
      @endauth   
   </nav>

</header>

<!-- header section ends -->