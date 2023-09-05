

@extends('layout.main')
@section('title', 'Home')

@section('content')

<div class="owl-carousel owl-theme owl_wrapper">
    <div class="item slide1"></div>
    <div class="item slide2"></div>
    <div class="item slide3"></div>
    <div class="item slide4"></div>

</div>

@endsection

@section('products')



    <div class="store">
        <h2 class="text-center">Mouse Store</h2>
    </div>


 <div class="prd_wrapper">

        {{-- @foreach ($products as $product) --}}

        @for ($i = 0; $i < 8; $i++)

        @php
        $increment  = $products[$i]->prd_price;
        $offer = $increment *1.2;
    @endphp
            
        <div class="prd">
            <div class="prd_img">
                <img class="prd_image" src="{{ asset ($products[$i]->prd_img) }}" alt="">
            </div>
            
            <div class="prd_title">
                <h2>{{ $products[$i]->prd_title}}</h2>
            </div>

            <div class="prd_price">
   
                <p style="font-weight: 700;color:rgba(0 0 0 /.8)" >$&nbsp;{{$products[$i]->prd_price}} <span style="text-decoration: line-through;padding:5px; color:var(--theme_color); text-decoration-color: black;font-size:1rem;">{{$offer}}</span></p>
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


        @for ($i = 20; $i < 28; $i++)

            
            
        <div class="prd">
            <div class="prd_img">
                <img class="prd_image" src="{{ asset ($products[$i]->prd_img) }}" alt="">
            </div>
            
            <div class="prd_title">
                <h2>{{ $products[$i]->prd_title}}</h2>
            </div>

            <div>

                <p style="font-weight: 700;color:rgba(0 0 0 /.8)" >$&nbsp;{{$products[$i]->prd_price}} <span style="text-decoration: line-through;padding:5px; color:var(--theme_color); text-decoration-color: black;font-size:1rem;">{{$offer}}</span></p>
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



    <div class="small_banner_wrapper">
        <div class="small_banner">
            <img width="100%" src="{{asset('img/smallbanner/1.webp')}}" alt="">
        </div>
        <div class="small_banner">
            <img width="100%" src="{{asset('img/smallbanner/2.webp')}}" alt="">

        </div>
        <div class="small_banner">
            <img width="100%" src="{{asset('img/smallbanner/3.webp')}}" alt="">

        </div>

        <div class="long_banner">
            {{-- <img width="100%" src="{{asset('img/smallbanner/5.webp')}}" alt=""> --}}
            
        </div>

        {{-- <div id="small_baner_bg">


        </div> --}}



    </div>


    <div class="store">
        <h2 class="text-center">Cabinets and Motherboard</h2>
    </div>

    <div class="prd_wrapper">


        @for ($i = 36; $i < 44; $i++)

            
            
        <div class="prd">
            <div class="prd_img">
                <img class="prd_image" src="{{ asset ($products[$i]->prd_img) }}" alt="">
            </div>
            
            <div class="prd_title">
                <h2>{{ $products[$i]->prd_title}}</h2>
            </div>

            <div>

            <p style="font-weight: 700;color:rgba(0 0 0 /.8)" >$&nbsp;{{$products[$i]->prd_price}} <span style="text-decoration: line-through;padding:5px; color:var(--theme_color); text-decoration-color: black;font-size:1rem;">{{$offer}}</span></p>
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


    <div class="readmore_wrapper">
        <a href="{{ url ('products')}}" class="read_more">Buy More Products</a>
    </div>

    <div class="shiping_polcy">

        <div class="serivces">
            <i class="fa-solid fa-clock"></i>
            <h2>24/7 Service</h2>
        </div>
        <div class="serivces">
            <i class="fa-solid fa-truck-fast"></i>
            <h2>International Shipping</h2>
        </div>
        <div class="serivces">
            <i class="fa-solid fa-headset"></i>
            <h2>365 Day Return</h2>
        </div>
        <div class="serivces">
            <i class="fa-solid fa-rocket"></i>
            <h2>Fast Delivery Avaliable</h2>
        </div>
        
    </div>




@endsection




