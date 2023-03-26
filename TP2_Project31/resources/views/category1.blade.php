@extends('layouts.main')


@section('main-container')

<section class="products">

<h1 class="heading">Our Products</h1>


<div class="product">

<!-- <div class="box-container"> creates the box for the image and text to be placed in -->
@foreach($data as $data)
<tr>
  <img src="{{url($data->photo)}}" width="100px">
  <td>{{$data->product_name}}</td>
  <td>{{$data->product_description}}</td>
  <td>{{$data->price}}</td>
</tr> 

<button type="submit" class="btn">Add to Basket</button>
  </div>


</div>

@endforeach

 
    

</section>

@endsection

<!-- home section ends -->
