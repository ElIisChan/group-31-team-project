@extends('layouts.main')


@section('main-container')

<section class="heading-link">
   <h3>Products</h3>
   <p> <a href="index.html">home</a> / products </p> <!-- links the home heading on the contact me page back to the home page -->
</section>

      <section class="products">

<h1 class="heading">Our Categories</h1>

<div class="box-container"> <!-- creates the box for the image and text to be placed in -->

   <div class="category">
      <img src="" alt=""> <!--  -->
      <h3>Drinks</h3>
      <img class="swiper-slide slide" src="/front-end/images/Drinks.jpg" width="100%;" padding="none;">
      <a class="btn" href="{{('category1') }} ">View Category</a>
      </div>

   <div class="category">
      <img src="" alt=""> <!--  -->
      <h3>Meat</h3>
      <img class="swiper-slide slide" src="/front-end/images/Meat.jpg" width="100%;" padding="none;">
      <a class="btn" href="{{('category2') }} ">View Category</a>
      </div>

   <div class="category">
      <img src="" alt=""> <!--  -->
      <h3>Seafood</h3>
      <img class="swiper-slide slide" src="/front-end/images/Seafood.jpg" width="100%;" padding="none;">
      <a class="btn" href="{{('category3') }} ">View Category</a>
      </div>

   <div class="category">
      <img src="" alt=""> <!--  -->
      <h3>Chinese Food</h3>
      <img class="swiper-slide slide" src="/front-end/images/Chinese.jpg" width="100%;" padding="none;">
      <a class="btn" href="{{('category4') }} ">View Category</a>
      </div>

   <div class="category">
      <img src="" alt=""> <!--  -->
      <h3>Vegetables</h3>
      <img class="swiper-slide slide" src="/front-end/images/Veg.jpg" width="100%;" padding="none;">
      <a class="btn" href="{{('category5') }} ">View Category</a>
      </div>

</div>

</section>

@endsection
