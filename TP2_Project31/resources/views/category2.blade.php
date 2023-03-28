@extends('layouts.main')


@section('main-container')

<section class="heading-link">
   <h3>Meat Items</h3>
   <p> <a href="{{('homepage') }}">home</a> / category 2 </p> <!-- links the home heading on the contact me page back to the home page -->
</section>

<section class="products">

  <h1 class="heading">Our Products</h1>
  
  <div class="box-container"> <!-- creates the box for the image and text to be placed in -->
  
    <div class="product">
      <img src="" alt=""> <!--  -->
      <h3>Chicken Steak</h3>
      <img class="swiper-slide slide" src="/front-end/images/Chicken Steak.jpg" width="100%;" padding="none;">
      <button type="submit" onclick="myAlert()" class="btn">Add to Basket</button>
   </div>
  
   <div class="product">
    <img src="" alt=""> <!--  -->
    <h3>Chicken Sandwich</h3>
    <img class="swiper-slide slide" src="/front-end/images/Chicken Sandwich.jpg" width="100%;" padding="none;">
    <button type="submit" onclick="myAlert()" class="btn">Add to Basket</button>
  </div>
  
  <div class="product">
    <img src="" alt=""> <!--  -->
    <h3>Chicken Ceaser Wrap</h3>
    <img class="swiper-slide slide" src="/front-end/images/Chicken Ceasar Wrap.jpg" width="100%;" padding="none;">
    <button type="submit" onclick="myAlert()" class="btn">Add to Basket</button>
  </div>
  
  <div class="product">
    <img src="" alt=""> <!--  -->
    <h3>Grilled Sandwich</h3>
    <img class="swiper-slide slide" src="/front-end/images/Grilled.jpg" width="100%;" padding="none;">
    <button type="submit" onclick="myAlert()" class="btn">Add to Basket</button>
  </div>
  
  <div class="product">
    <img src="" alt=""> <!--  -->
    <h3>Chicken Cheese Sandwich</h3>
    <img class="swiper-slide slide" src="/front-end/images/Ham Sandwich.jpg" width="100%;" padding="none;">
    <button type="submit" onclick="myAlert()" class="btn">Add to Basket</button>
  </div>
  
  </div>
  
  </section>

@endsection

<!-- home section ends -->
