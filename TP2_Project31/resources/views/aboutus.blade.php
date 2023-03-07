@extends('layouts.main')


@section('main-container')
<section class="heading-link">
   <h3>About Us</h3>
   <p> <a href="{{('homepage') }}">home</a> / about us </p> <!-- links the home heading on the contact me page back to the home page -->
</section>

<section class="info">
    <section class="about">
    <h1 class="heading"> About The Company </h1>
    
    <div class="contain">
    
       <div class="icons">
          <i class="fas fa-building"></i>
          <p>We named our company Good Value Dinners as we aim to give people delicious meals whilst also offering a fair price and in the making of this company it has consisted of 7 team members which can all be found below if you are curious to know who we are. At Good Value Dinners we sell a range of items that can be found on our products page where you can select the category you wish and see which products are available. We are a company that is still expanding and at this current time we sell in over 100 countries and have over 2 million active users. We care about you the customer as you are the most important and we want to ensure you have a great experience with us and continue to shop with us.</p>
       </div>
      </section>

<section class="about">

  <h1 class="heading">Founding Members</h1>
  
  <div class="box-container"> <!-- creates the box for the image and text to be placed in -->
  
     <div class="member">
        <img src="/front-end/images/user.png" alt=""> <!-- https://www.nicepng.com/ourpic/u2q8i1a9e6i1o0o0_view-user-icon-png-user-circle-icon-png/ -->
        <h3>Ellis Crowther</h3>
        </div>
  
     <div class="member">
        <img src="/front-end/images/user.png" alt=""> <!-- https://www.nicepng.com/ourpic/u2q8i1a9e6i1o0o0_view-user-icon-png-user-circle-icon-png/ -->
        <h3>Rohan Dhaliwal</h3>
        </div>
  
     <div class="member">
        <img src="/front-end/images/user.png" alt=""> <!-- https://www.nicepng.com/ourpic/u2q8i1a9e6i1o0o0_view-user-icon-png-user-circle-icon-png/ -->
        <h3>Mohammed Koyes</h3>
        </div>
  
     <div class="member">
        <img src="/front-end/images/user.png" alt=""> <!-- https://www.nicepng.com/ourpic/u2q8i1a9e6i1o0o0_view-user-icon-png-user-circle-icon-png/ -->
        <h3>Muhammad Majid</h3>
        </div>
  
     <div class="member">
        <img src="/front-end/images/user.png" alt=""> <!-- https://www.nicepng.com/ourpic/u2q8i1a9e6i1o0o0_view-user-icon-png-user-circle-icon-png/ -->
        <h3>Reese Patel</h3>
        </div>

     <div class="member">
      <img src="/front-end/images/user.png" alt=""> <!-- https://www.nicepng.com/ourpic/u2q8i1a9e6i1o0o0_view-user-icon-png-user-circle-icon-png/ -->
      <h3>Saqib Rehman</h3>
      </div>

   <div class="member">
    <img src="/front-end/images/user.png" alt=""> <!-- https://www.nicepng.com/ourpic/u2q8i1a9e6i1o0o0_view-user-icon-png-user-circle-icon-png/ -->
    <h3>Arsalan Yasar</h3>
    </div>
  
  </div>
  
  </section>

@endsection

<!-- home section ends -->
