@extends('layouts.main')
@section('main-container')

    <div class="product-page">
      <div class="container">
        <div class="product-page-row">
          <section class="product-page-image">
            <img src="/front-end/images/Mineral_Water.jpg" alt="Mineral water">
            <!-- front-end/images/Mineral_Water.jpg -->
          </section>
          <section class="product-page-details">
            <p class="title">{{'Juice'}}</p> 
            <p class="price">{{'£10'}}</p>
            <p class="category">{{category}}</p>
          </section>

        </div>
      </div>
    </div>

@endsection

<!-- home section ends -->
