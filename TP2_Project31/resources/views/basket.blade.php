@extends('layouts.main')


@section('main-container')
<section class="heading-link">
   <h3>Basket</h3>
   <p> <a href="index.html">home</a> / basket </p> <!-- links the home heading on the contact me page back to the home page -->
</section>

<div style="padding:100px;" align="center";>
   <table>
      <tr style="background-color:grey;">
         <td style="padding:10px; font-size: 20px;">Product Name</td>
         <td style="padding:10px; font-size: 20px;">Product Description</td>
         <td style="padding:10px; font-size: 20px;">Quantity</td>
         <td style="padding:10px; font-size: 20px;">Price</td>
         <td style="padding:10px; font-size: 20px;">Action</td>
      </tr>


      @foreach($basket as $baskets)

      <tr>
         <td style="padding:10px; font-size: 20px;">{{$baskets->product_name}}</td>
         <td style="padding:10px; font-size: 20px;">{{$baskets->product_description}}</td>
         <td style="padding:10px; font-size: 20px;">{{$baskets->quantity}}</td>
         <td style="padding:10px; font-size: 20px;">£{{$baskets->price}}</td>
         <td style="padding:10px; font-size: 20px;">
         <a class="" href="{{url('delete', $baskets->id)}}">Delete</a></td>



      </tr>

      @endforeach
   </table>

</div>



@endsection

<!-- home section ends -->
