@extends('layout.main')
@section('title', 'Home')

@section('content')

<div class="banner">
    <img class="img_banner" src="{{ asset ('img/banner/b5550.webp')}}" alt="">
</div>

@endsection

@section('products')


 <div class="prd_wrapper">

        @foreach ($products as $product)

        <div class="prd">
            <div class="prd_img">
                <img class="prd_image" src="{{ asset ('img/asus/Ant-510Air.jpg')}}" alt="">
            </div>
            
            <div class="prd_title">
                <h2>{{$product->prd_title}}</h2>
            </div>

            <div class="prd_price">
                <p >{{$product->prd_price}}</p>
            </div>

            <div class="buybtn">
                <button class="cart_btn">Buy Now</button>
            </div>
        </div>

        @endforeach

       
    </div>

@endsection




