<!-- @extends('layouts.main') -->


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
      <h3>category 1</h3>
      <a class="btn" href="category1.html">View Category</a>
      </div>

   <div class="category">
      <img src="" alt=""> <!--  -->
      <h3>category 2</h3>
      <a class="btn" href="category2.html">View Category</a>
      </div>

   <div class="category">
      <img src="" alt=""> <!--  -->
      <h3>category 3</h3>
      <a class="btn" href="category3.html">View Category</a>
      </div>

   <div class="category">
      <img src="" alt=""> <!--  -->
      <h3>category 4</h3>
      <a class="btn" href="category4.html">View Category</a>
      </div>

   <div class="category">
      <img src="" alt=""> <!--  -->
      <h3>category 5</h3>
      <a class="btn" href="category5.html">View Category</a>
      </div>

</div>

</section>

@endsection
