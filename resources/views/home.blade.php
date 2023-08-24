@extends('layout.main')
@section('title', 'Home')

@section('content')

<div class="banner">
    <img class="img_banner" src="{{ asset ('img/banner/b5550.webp')}}" alt="">
</div>

@endsection

@section('products')

    <div class="store">
        <h2>Our Store</h2>
    </div>

 <div class="prd_wrapper">

        @foreach ($products as $product)

        <div class="prd">
            <div class="prd_img">
                <img class="prd_image" src="{{ asset ($product->prd_img) }}" alt="">
            </div>
            
            <div class="prd_title">
                <h2>{{ $product->prd_title}}</h2>
            </div>

            <div class="prd_price">
                <p >$&nbsp;{{$product->prd_price}}</p>
            </div>

            <div class="buybtn">
                {{-- @php
                    print $product->prd_id;
                @endphp --}}
                <a href="product_details/{{$product['prd_id']}}" class="cart_btn">Buy Now</a>
            </div>
        </div>

        @endforeach

       
    </div>

@endsection




