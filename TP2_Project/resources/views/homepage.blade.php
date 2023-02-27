@extends('layouts.main')


@section('main-container')
    <!-- <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
        </div>      
            @endif -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">
      
      <div class="swiper-wrapper">

         <section class="swiper-slide slide" style="background: url(images/food.jpg);"> <!-- https://en.wikipedia.org/wiki/Food -->
            <div class="content">
               <h3>Good Value Dinners</h3>
            </div>
         </section>
      </div>
      </div>

</section>

<section class="info">
<section class="products">
<h1 class="heading"> Why Choose Us? </h1>

<div class="contain">

   <div class="icons">
      <i class="fas fa-globe"></i>
      <h3>Global :</h3>
      <p>We currently sell in over 100 countries across 5 continents which is continuing to expand further each year.</p>
   </div>

   <div class="icons">
      <i class="fas fa-chart-line"></i>
      <h3>Revenue :</h3>
      <p>We are currently projected to have a revenue of $200 million this year which is a rapid increase on previous years showing how well we are doing.</p>
   </div>

   <div class="icons">
      <i class="fas fa-phone"></i>
      <h3>Customer Service :</h3>
      <p>We have customer service active 24 hours everyday ensuring you are able to get the help you need.</p>
   </div>

   <div class="icons">
      <i class="fas fa-user-alt"></i>
      <h3>Customers :</h3>
      <p>We currently have 2 million active users which is a 23% increase on last year.</p>
   </div>

   <div class="icons">
    <i class="fas fa-heartbeat"></i>
    <h3>Health :</h3>
    <p>We aim to provide fresh food and cater to your every need including allergies, dietary requirements, calories and many more.</p>
</div>

<div class="icons">
  <i class="fas fa-plane"></i>
  <h3>Environment and Farmers :</h3>
  <p>We use local farms in order to get produce as this allows us to reduce our global footprint as well as helping out local farmers by buying products from them giving them extra business.</p>
</div>

</div>
</section>



<h1 class="heading"> Categories of Products </h1>

<div class="contain">

   <div class="icons">
      <i class="fas fa-hamburger"></i>
      <h3>category 1</h3>
   </div>

   <div class="icons">
      <i class="fas fa-cheese"></i>
      <h3>category 2</h3>
      </div>

   <div class="icons">
      <i class="fas fa-bacon"></i>
      <h3>category 3</h3>
      </div>

   <div class="icons">
      <i class="fas fa-hotdog"></i>
      <h3>category 4</h3>
      </div>

      <div class="icons">
      <i class="fas fa-pizza-slice"></i>
      <h3>category 5</h3>
      </div>
</div>

@endsection

<!-- home section ends -->
