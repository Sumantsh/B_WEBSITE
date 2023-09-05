@extends('layout.main')

@section('products')

<div class="product_banner">

    <h2>XfineSolutions</h2>
    <p>Store</p>

    {{-- <img class="store_banner" src="{{asset ('img/banner/storebanner.png')}}" alt=""> --}}

</div>

<div class="products-page-container">



    <!-- grid to show out the products -->
    <div class="products-grid">
        <div class="products-grid-container">

            @foreach ($products as $product)
            <a href="product_details/{{$product['prd_id']}}">
                <div class="product-show">
                    <div class="product-show-image">
                        <img src="{{asset ($product['prd_img'])}}" >
                    </div>
                    <h3 class="product-show-name">{{$product['prd_title']}}</h3>
                    <h3 class="product-show-price" style="color:var(--theme_color)"><span>$</span><span >{{$product['prd_price']}}</span></h3>
                    <h4 class="add-to-favorites">Add to Favorites</h4>
                </div>
                </a>
            @endforeach

        </div>
    </div>
</div>

@endsection
   