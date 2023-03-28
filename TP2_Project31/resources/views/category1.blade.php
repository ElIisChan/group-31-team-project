@extends('layouts.main')


@section('main-container')

<section class="products">

      @if(session()->has('message'))
     <div class="alert alert-success" style="background:green; font-size:30px;">
     <button type="button" class="close" data-dismiss="alert" style="background:green; font-size:30px;">x</button>
      {{session()->get('message')}}
     </div> 
      @endif

      <h1 class="heading">Our Products</h1>
  <div class="products">

  <form>
      <!-- <div class="box-container"> creates the box for the image and text to be placed in -->
      @foreach($data as $data)
      <tr><br>
      <form style="background:grey;">
      <div class="product2" style=" font-size: 20px; width: 150px;" align="left";>
        <td style="padding:10px; font-size: 20px;">{{$data->product_name}}</td><br>
        </div>
        </form>
        <form>
        <div class="product2" style=" font-size: 20px; width: 150px;" align="left";> 
        <img src="{{url($data->photo)}}" width="250px">
        </div>
        </form style="width:300px;">
        <form>
        <div class="product2" style="font-size: 20px; width: 200px;" align="left";>
        <td style="padding:10px; font-size: 20px;">Description: {{$data->product_description}}</td>
        </div>
        </form>
        <form>
        <div class="product2" style=" font-size: 20px; width: 150px;" align="left";>
        <td style="padding:10px; font-size: 20px;">price: £{{$data->price}}</td>
        </div>
        </form>
      </tr><br>
      
      <form action="{{url('addbasket', $data->id)}}" method="POST">
        @csrf
        <input type="number" value="1" min="1" style="width:100px" name="quantity" margin-left="-50px">
        <br>
        <button type="submit" class="btn">Add to Basket</button><br>
      </form>
  </div>
</div>

@endforeach

</form>

 
    

</section>

@endsection

<!-- home section ends -->
