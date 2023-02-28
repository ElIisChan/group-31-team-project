@extends('layouts.main')


@section('main-container')

<!-- contact section starts  -->

<section class="contact">

   <h1 class="heading"> Ways To Get In Touch </h1>

   <div class="submit">

      <div class="icons">
         <h3>Address :</h3>
         <p>53 Parkway Avenue, B21 0AA</p>
      </div>

      <div class="icons">
         <h3>Phone Number :</h3>
         <p>01523456784</p>
      </div>

      <div class="icons">
         <h3>Email : </h3>
         <p>customersupport@gvd.com</p>
      </div>

      <div class="icons">
         <h3>Opening Times :</h3>
         <p>24 hours / 7 days a week</p>
      </div>

   </div>

   <div class="main">

         <form == "" class="form-container">

             <label for="name">Name</label>
             <input type="text" id="name" placeholder="Enter Name" class="box" name="name" required>
 
             <label for="email">Email</label>
             <input type="text" id="email" placeholder="Enter Email" class="box" name="email" required>
 
             <label for="query">Query</label>
             <input type="text" id="query" placeholder="Enter Query" class="box" name="query" required>
 
             <button type="submit" onclick="myAlert()" class="btn">Send Query</button>
         </form>
     </div>


</section>


@endsection

<!-- home section ends -->
