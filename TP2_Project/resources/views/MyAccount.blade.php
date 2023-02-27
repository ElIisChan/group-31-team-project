<!-- @extends('layouts.main') -->


@section('main-container')

  <section class="products">
    <div class="container">
      <br>
<div class="row"><h1>My Basket</h1></div>
<table>
  <br>
  <tr>
    <td style="font-size: 15px;" ><div class"col"><div class="product"><h2>&nbsp Product &nbsp</h2></div></div></td>
    <td style="font-size: 15px;" ><div class"col"><div class="quantity"><h2>&nbsp Quantity &nbsp</h2></div></div></td>
    <td style="font-size: 15px;" ><div class"col"><div class="price"><h2>&nbsp Price &nbsp</h2></div></div></td>
  </tr>
  <tr>
    <td></td>


    <!--basket view-->
      <td><input type= "number" value= "{{$basket['quantity']}}" min="1" class="form" name="quantity"></td>
      <td></td>

      <!--update button-->
      <td><button type="submit" onclick="alert('Quantity Updated Successfully')" class="btn">Update</button></td>
    </form>

    <!--Remove Button-->
      <td><button type="submit" onclick="alert('Product Removed Successfully')" class="btn">remove</button></td>
    </form>
  </tr>
</table>

<table>
  <tr>
    <td><h3>Total = &nbsp</td><td></td>
  </tr>
</table>
</div>
<br>

<!--Delivery Address take input-->
<div class="container">
  <br>
  <div class="row"><h1> Checkout </h1></div>

  <table>
    <tr>
      <td style="font-size: 15px;"><div class"col"><div class="checkoutSec"><h3>Name</h3></div></div></td>
<td style="font-size: 15px;"><div class"col"><div class="checkoutSec"><h3>House Number</h3></div></div></td>
<td style="font-size: 15px;"><div class"col"><div class="checkoutSec"><h3>Street Address</h3></div></div></td>
<td style="font-size: 15px;"><div class"col"><div class="checkoutSec"><h3>Post Code</h3></div></div></td>
<td style="font-size: 15px;"><div class"col"><div class="checkoutSec"><h3>City</h3></div></div></td>
<td style="font-size: 15px;"><div class"col"><div class="checkoutSec"><h3>Card Number</h3></div></div></td>
<td style="font-size: 15px;"><div class"col"><div class="checkoutSec"><h3>Expiry Date</h3></div></div></td>
<td style="font-size: 15px;"><div class"col"><div class="checkoutSec"><h3>Cvv Number</h3></div></div></td>

</tr>


<form action="{{url('checkout')}}" method="POST">
  <tr>
    <td><input type= "text" value= "" class="form" name="name"></td>
    <td><input type= "text" value= "" class="form" name="house_number"></td>
    <td><input type= "text" value= "" class="form" name="street_address"></td>
    <td><input type= "text" value= "" class="form" name="post_code"></td>
    <td><input type= "text" value= "" class="form" name="city"></td>
    <td><input type= "text" value= "" class="form" name="card_number"></td>
    <td><input type= "date" value= "" class="form" name="expiry_date"></td>
    <td><input type= "password" value= "" class="form" name="cvv"></td>
    <br>

    <!--Submit Order-->
    <td><button type="submit" onclick="alert('We received your order! Thank You For Shopping with Us :) !!')" class="btn">Checkout</button></td>
</form>

</tr>

</table>
</div>
<br>
<!--Show user's orders-->

<div class="container">
  <br>
  <div class="row"><h1>My Order History</h1></div>
  <table>
    <tr>
      <td style="font-size: 15px;"><div class"col"><div class="Myorderhistory"><h3>&nbsp Product &nbsp</h3></div></div></td>
<td style="font-size: 15px;"><div class"col"><div class="Myorderhistory"><h3>&nbsp Quantity &nbsp</h3></div></div></td>
<td style="font-size: 15px;"><div class"col"><div class="Myorderhistory"><h3>&nbsp Price &nbsp</h3></div></div></td>
<td style="font-size: 15px;"><div class"col"><div class="Myorderhistory"><h3>&nbsp Order Status &nbsp</h3></div></div></td>
<td style="font-size: 15px;"><div class"col"><div class="Myorderhistory"><h3>&nbsp Ordered Places On Date: &nbsp</h3></div></div></td>
</tr>

</table>
</div>

</div>

@endsection

