@extends('layouts.main')


@section('main-container')

<section class="heading-link">
   <h3>Chinese Food</h3>
   <p> <a href="{{('homepage') }}">home</a> / category 4 </p> <!-- links the home heading on the contact me page back to the home page -->
</section>

<section class="products">

  <h1 class="heading">Our Products</h1>
  
  <div class="box-container"> <!-- creates the box for the image and text to be placed in -->
  
    <div class="product">
      <img src="" alt=""> <!--  -->
      <h3>Beef Lasanga</h3>
      <img class="swiper-slide slide" src="/front-end/images/Beef.jpg" width="100%;" padding="none;">
      <button type="submit" onclick="myAlert()" class="btn">Add to Basket</button>
   </div>
  
   <div class="product">
    <img src="" alt=""> <!--  -->
    <h3>Pasta Salad</h3>
    <img class="swiper-slide slide" src="/front-end/images/Pasta Salad.jpg" width="100%;" padding="none;">
    <button type="submit" onclick="myAlert()" class="btn">Add to Basket</button>
  </div>
  
  <div class="product">
    <img src="" alt=""> <!--  -->
    <h3>Cheese Pasta</h3>
    <img class="swiper-slide slide" src="/front-end/images/Pasta.jpg" width="100%;" padding="none;">
    <button type="submit" onclick="myAlert()" class="btn">Add to Basket</button>
  </div>
  
  <div class="product">
    <img src="" alt=""> <!--  -->
    <h3>Panzanella</h3>
    <img class="swiper-slide slide" src="/front-end/images/Panzanella.jpg" width="100%;" padding="none;">
    <button type="submit" onclick="myAlert()" class="btn">Add to Basket</button>
  </div>
  
  <div class="product">
    <img src="" alt=""> <!--  -->
    <h3>Sesame Noodles</h3>
    <img class="swiper-slide slide" src="/front-end/images/Cold Sesame Cucumber Noodles.jpg" width="100%;" padding="none;">
    <button type="submit" onclick="myAlert()" class="btn">Add to Basket</button>
  </div>
  
  </div>
  
  </section>


@endsection

<!-- home section ends -->
