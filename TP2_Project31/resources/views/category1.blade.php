@extends('layouts.main')


@section('main-container')

<section class="products">

      @if(session()->has('message'))
     <div class-"alert alert-success">
     <button type="button" class="close" data-dismiss="alert">x</button>
      {{session()->get('message')}}
     </div> 
      @endif

      <h1 class="heading">Our Products</h1>
  <div class="product2">

      <!-- <div class="box-container"> creates the box for the image and text to be placed in -->
      @foreach($data as $data)
      <tr>
        <td>{{$data->product_name}}</td> <br>
        <img src="{{url($data->photo)}}" width="300px" height="200">
        <td>{{$data->product_description}}</td><br>
        <td>price: £{{$data->price}}</td>
      </tr> 
      <form action="{{url('addbasket', $data->id)}}" method="POST">
        @csrf
        <input type="number" value="1" min="1" style="width:100px" name="quantity" margin-left="-50px">
        <br>
        <button type="submit" height="25px" class="btn">Add to Basket</button>
      </form>
  </div>
</div>

@endforeach

 
    

</section>

@endsection

<!-- home section ends -->
