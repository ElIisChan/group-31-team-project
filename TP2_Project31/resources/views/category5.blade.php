@extends('layouts.main')


@section('main-container')
<section class="heading-link">
   <h3>Veg items</h3>
   <p> <a href="{{('homepage') }}">home</a> / category 5 </p> <!-- links the home heading on the contact me page back to the home page -->
</section>

<section class="products">

  <h1 class="heading">Our Products</h1>
  
  <div class="box-container"> <!-- creates the box for the image and text to be placed in -->
  
    <div class="product">
      <img src="" alt=""> <!--  -->
      <h3>Potato Salad</h3>
      <img class="swiper-slide slide" src="/front-end/images/Potato Salad.jpg" width="100%;" padding="none;">
      <button type="submit" onclick="myAlert()" class="btn">Add to Basket</button>
   </div>
  
   <div class="product">
    <img src="" alt=""> <!--  -->
    <h3>Ceasar Salad</h3>
    <img class="swiper-slide slide" src="/front-end/images/Caesar Salad.jpeg" width="100%;" padding="none;">
    <button type="submit" onclick="myAlert()" class="btn">Add to Basket</button>
  </div>
  
  <div class="product">
    <img src="" alt=""> <!--  -->
    <h3>Greek Salad</h3>
    <img class="swiper-slide slide" src="/front-end/images/Greek Salad.jpg" width="100%;" padding="none;">
    <button type="submit" onclick="myAlert()" class="btn">Add to Basket</button>
  </div>
  
  <div class="product">
    <img src="" alt=""> <!--  -->
    <h3>Vegetable Wrap</h3>
    <img class="swiper-slide slide" src="/front-end/images/Turkey Wrap.jpeg" width="100%;" padding="none;">
    <button type="submit" onclick="myAlert()" class="btn">Add to Basket</button>
  </div>
  
  <div class="product">
    <img src="" alt=""> <!--  -->
    <h3>Salad</h3>
    <img class="swiper-slide slide" src="/front-end/images/Chickpea Salad.jpg" width="100%;" padding="none;">
    <button type="submit" onclick="myAlert()" class="btn">Add to Basket</button>
  </div>
  
  </div>
  
  </section>


@endsection

<!-- home section ends -->
