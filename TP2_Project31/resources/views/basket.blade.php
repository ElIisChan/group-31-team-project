@extends('layouts.main')


@section('main-container')
<section class="heading-link">
   <h3>Basket</h3>
   <p> <a href="index.html">home</a> / basket </p> <!-- links the home heading on the contact me page back to the home page -->
</section>

   <section id = "cart-container" class = "container my-2">
      <table width="100%">
         <thead>
         <tr>
            <td>Remove</td>
            <td>Image</td>
            <td>Product</td>
            <td>Price</td>
            <td>Quantity</td>
            <td>Total</td>
         </tr>
         </thead>

         <tbody>
         <tr>
            <td><a href="#"><i class = "fas fa-trash-alt"></i></a></td>
            <td><img src = "images/placeholder.png" alt = "#"></td>
            <td>
               <h5>Sandwich</h5>
            </td>
            <td><h5>£3.50</h5></td>
            <td><input class = "w-25 pl-1" value = "1" type="number"></td>
            <td><h5>£3.50</h5></td>
         </tr>

         <tr>
            <td><a href="#"><i class = "fas fa-trash-alt"></i></a></td>
            <td><img src = "images/placeholder.png" alt = "#"></td>
            <td>
               <h5>Drink</h5>
            </td>
            <td><h5>£1.25</h5></td>
            <td><input class = "w-25 pl-1" value = "1" type="number"></td>
            <td><h5>£1.25</h5></td>
         </tr>

         <tr>
            <td><a href="#"><i class = "fas fa-trash-alt"></i></a></td>
            <td><img src = "images/placeholder.png" alt = "#"></td>
            <td>
               <h5>Salad</h5>
            </td>
            <td><h5>£2.30</h5></td>
            <td><input class = "w-25 pl-1" value = "1" type="number"></td>
            <td><h5>£2.30</h5></td>
         </tr>
         </tbody>
      </table>
   </section>

   <section id = "cart-bottom" class = "container">
      <div class = "row">
         <div class = "coupon col-lg-6 col-md-6 col-12 mb-4">
            <div>
               <h5>Coupon</h5>
               <p>Enter coupon code here:</p>
               <input type = "text" placeholder="coupon code">
               <button>Apply coupon</button>
            </div>
         </div>

         <br>

         <div class = "total col-lg-6 col-md-6 col-12">
            <div>
               <h5>Cart total</h5>
               <div class = "d-flex justify-content-between">
                  <h6>Subtotal</h6>
                  <p>£7.05</p>
               </div>

               <div class = "d-flex justify-content-between">
                  <h6>Shipping</h6>
                  <p>£5.00</p>
               </div>

               <hr class="second-hr">
               <div class = "d-flex justify-content-between">
                  <h6>Total</h6>
                  <p>£12.05</p>
               </div>

               <button class = "ml-auto">Proceed to checkout</button>
            </div>
         </div>
      </div>
   </section>


@endsection

<!-- home section ends -->
