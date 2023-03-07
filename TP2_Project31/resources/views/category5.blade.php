@extends('layouts.main')


@section('main-container')
<section class="heading-link">
   <h3>Category 5</h3>
   <p> <a href="{{('homepage') }}">home</a> / category 5 </p> <!-- links the home heading on the contact me page back to the home page -->
</section>

<section class="products">

  <h1 class="heading">Our Products</h1>
  
  <div class="box-container"> <!-- creates the box for the image and text to be placed in -->
  
    <div class="product">
      <img src="" alt=""> <!--  -->
      <h3>product 1</h3>
      <button type="submit" onclick="myAlert()" class="btn">Add to Basket</button>
   </div>
  
   <div class="product">
    <img src="" alt=""> <!--  -->
    <h3>product 2</h3>
    <button type="submit" onclick="myAlert()" class="btn">Add to Basket</button>
  </div>
  
  <div class="product">
    <img src="" alt=""> <!--  -->
    <h3>product 3</h3>
    <button type="submit" onclick="myAlert()" class="btn">Add to Basket</button>
  </div>
  
  <div class="product">
    <img src="" alt=""> <!--  -->
    <h3>product 4</h3>
    <button type="submit" onclick="myAlert()" class="btn">Add to Basket</button>
  </div>
  
  <div class="product">
    <img src="" alt=""> <!--  -->
    <h3>product 5</h3>
    <button type="submit" onclick="myAlert()" class="btn">Add to Basket</button>
  </div>
  
  </div>
  
  </section>


@endsection

<!-- home section ends -->
