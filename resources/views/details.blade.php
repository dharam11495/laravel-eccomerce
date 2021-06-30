@extends('master')
@section('content')

<div class="container login-container">
    <div class="row">
        <div class="col-md-6">
            <img class="slider-img" src="{{$data['gallery']}}">
         </div>
         <div class="col-md-6">
             <a href="{{URL::to('/')}}">Go back</a>
            <h2>Name : {{$data['name']}}</h2>
            <h3>Price : {{$data['price']}}</h3>
            <h4>Category : {{$data['category']}}</h4>
            <h4>Description : {{$data['description']}}</h4>
            <br><br>
            <button class="btn btn-success">Add to cart</button>
            <br><br>
            <button class="btn btn-primary">Buy Now</button>
         </div>
    </div>
</div>

@endsection