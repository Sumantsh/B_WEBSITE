@extends('layout.main')
@section('title', 'Home')

@section('content')

<div class="banner">
    <img class="img_banner" src="{{ asset ('img/banner/b5550.webp')}}" alt="">
</div>

@endsection

@section('products')



    <div class="store">
        <h2 class="text-center">Mouse Store</h2>
    </div>


 <div class="prd_wrapper">

        {{-- @foreach ($products as $product) --}}

        @for ($i = 0; $i < 4; $i++)

            
            
        <div class="prd">
            <div class="prd_img">
                <img class="prd_image" src="{{ asset ($products[$i]->prd_img) }}" alt="">
            </div>
            
            <div class="prd_title">
                <h2>{{ $products[$i]->prd_title}}</h2>
            </div>

            <div class="prd_price">
                <p >$&nbsp;{{$products[$i]->prd_price}}</p>
            </div>

            <div class="buybtn">
                {{-- @php
                    print $product->prd_id;
                @endphp --}}
                <a href="product_details/{{$products[$i]->prd_id}}" class="cart_btn">Buy Now</a>
            </div>
        </div>

  
        @endfor




       
    </div>


    <div class="store">
        <h2 class="text-center">Monitor Store</h2>
    </div>


    <div class="prd_wrapper">


        @for ($i = 20; $i < 24; $i++)

            
            
        <div class="prd">
            <div class="prd_img">
                <img class="prd_image" src="{{ asset ($products[$i]->prd_img) }}" alt="">
            </div>
            
            <div class="prd_title">
                <h2>{{ $products[$i]->prd_title}}</h2>
            </div>

            <div class="prd_price">
                <p >$&nbsp;{{$products[$i]->prd_price}}</p>
            </div>

            <div class="buybtn">
                {{-- @php
                    print $product->prd_id;
                @endphp --}}
                <a href="product_details/{{$products[$i]->prd_id}}" class="cart_btn">Buy Now</a>
            </div>
        </div>

  
        @endfor
    </div>

@endsection




