<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>Good Value Dinners</h3>
         <p>At Good Value Dinners we use fresh food and we cater for all no matter what your allergies or dietary requirements may be. We also use local farms in order to give back to communities allowing for reinvestment and development of them, this also lowers are carbon footprint making us environmentally friendly. We hope you enjoy our service and continue to use it for many more years.</p>
      </div>

      <div class="box">
         <h3>quick links</h3>
         <a href="{{('homepage') }} " class="link">Home</a> <!-- allows the user to navigate through the pages using the links in the footer -->
         <a href="{{('aboutus') }}" class="link">About Us</a>
         <a href="{{('products') }}" class="link">Products</a>
         <a href="{{('contactus') }}" class="link">Contact Us</a>
         <a href="{{route('login') }}" class="link">Login</a> 
         <a href="{{route('register') }}" class="link">Register</a>
         <a href="{{ url('/logout') }}" class="link">Logout</a>
         <a href="{{('basket') }}" class="link">Basket</a>
      </div>

   </div>

   <div class="credit"> created by <span>Group 31</span></div>

</section>

<!-- footer section ends -->