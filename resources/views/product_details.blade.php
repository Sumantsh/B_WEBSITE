@extends('layout.main')
@section('title', 'Product Page')

@section('product_details')


{{-- @php
  
@endphp --}}

<div class="text">

  <p class="page_detail"><span> Home <i class="fa-solid fa-chevron-right"></i></span><span> {{$product->company}} <i class="fa-solid fa-chevron-right"> </i></span> <span> {{$product->prd_cate}}  <i class="fa-solid fa-chevron-right"> </i></span></p>

  <div class="product_wrapper">
    
    <div class="product_detail_wrapper">

        <div class="prd_detail_image">
            <img class="prd_image2" src="{{asset ($product->prd_img)}}" alt="">
        

        </div>

        <div class="prd_detail">

            <div class="prd_detail_title">
                <h2 class="prd_title2">{{$product->prd_title}}</h2>
            </div>

            
           

            <div class="highlight">
                <p class="highlight_para" style="font-weight: 600;color:black">Highlights:</p>
                <p class="highlight_show">{{$product->highlight}}.</p>
            </div>




            <div class="prd_detail_price_design">

                <div class="prd_price_absolute">
                    <p class="prd_price2">Price: $<span>{{$product->prd_price}}</span></p>
            </div>



                <div class="prd_detail_price">
                    <a class="buy_now" href="{{ URL ('Checkout')}}/{{$product['prd_id']}}">Buy Now</a>                
                </div>
            </div>

           

        </div>
    </div>
  </div>

</div>

<div class="discription">
    <div class="store">
        <h2 >Product Discription</h2>
    </div>

    <div class="disc_wrapper">

        <div class="prd_disc_wrapper">

        @php
        print_r ($product->prd_disc);        
        @endphp

</div>

    </div>



</div>


@endsection