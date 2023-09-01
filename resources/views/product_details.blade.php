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

            <div class="price-container">
                <p><span>$</span><span class="price-detail" id="productprice">{{$product->prd_price}}</span> <span class="free-delivery">Free Delivery</span> </p>
            </div>

            <p class="inclusive-of-all-taxes">Inclusive of all Taxes</p>

            <div class="product-details">
                @php
                    $viewed = 1;
                @endphp
                <div class="grid-container">
                    <p class="name">Brand</p>
                    <p class="value">{{$product->company}}</p>
                    <p class="name">Product Category</p>
                    <p class="value">{{$product->prd_cate}}</p>
                    <p class="name">Availability</p>
                    <p class="value">{{$product->stock}}</p>
                    <p class="name">Viewed</p>
                    <p class="value">{{$viewed}}</p>
                </div>
            </div>

            <div class="highlight">
                <p class="highlight_para" style="font-weight: 600;color:black">Highlights:</p>
                <p class="highlight_show">{{$product->highlight}}.</p>
            </div>


            <div id="addcart">
                <div class="qty-text">Qty</div>

                <div class="addition">
                    <button id="minus" value="-1">-</button>
                    <div id="showvalue" step="1" inputmode="numeric">1</div>
                    <button id="plus" value="1" step="1">+</button>
                </div>
            </div>


            <div class="prd_detail_price_design">
                <div class="prd_detail_price">
                    <a class="buy_now" id="addtocart" data-productid="{{$product['prd_id']}}" href="{{ URL ('Checkout')}}/{{$product['prd_id']}}">Add to Cart</a>                
                </div>

                <div class="prd_detail_price">
                    <a class="buy_now" id="buynow" data-productid="{{$product['prd_id']}}" href="{{ URL ('Checkout')}}/{{$product['prd_id']}}">Buy Now</a>                
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<livewire:cart />

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


<script>
    const increaseQtyFieldBtn = document.querySelector("#plus");
    const decreaseQtyFieldBtn = document.querySelector("#minus");
    const qty = document.querySelector("#showvalue");
    
    const addToCartBtn = document.querySelector("#addtocart");
    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    const uid = () => {
        return Date.now().toString(36) + Math.floor(Math.pow(10, 12) + Math.random() * 9*Math.pow(10, 12)).toString(36);
    }

    increaseQtyFieldBtn.addEventListener("click", updateQtyField);
    decreaseQtyFieldBtn.addEventListener("click", updateQtyField);

    function updateQtyField(e) {
    if(Number(e.target.value) === -1 && Number(qty.textContent) > 0) {
        qty.textContent = Number(qty.textContent) - 1;
    } 
    if(Number(e.target.value) === 1) {
        qty.textContent = Number(qty.textContent) + 1;
    }
    }

    addToCartBtn.addEventListener("click", async (e) => {
    e.preventDefault();
    const productID = addToCartBtn.dataset.productid;
    const priceEle = document.querySelector("#productprice");
    const price = priceEle.textContent;

    const data = {
        UID: uid(),
        prodID: productID,
        price: price,
        qty: Number(qty.textContent),
    }

    const response = await fetch("/add-to-cart", {
        method: "POST",
        body: JSON.stringify(data),
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'X-CSRF_TOKEN': csrfToken
        },
        redirect: "follow"
    });
    const json = await response.json();
    if(json.msg == "Product added to the cart") {
        Livewire.emit('updateComponent');
    }
})

document.addEventListener('livewire:load', function () {
    let hookExecutionCount = 0;
    Livewire.hook('element.initialized', (el, component) => {
        if(hookExecutionCount < 1) {
            const checkoutBtn = el.querySelector(".checkout");
            if(checkoutBtn) {
                checkoutBtn.addEventListener("click", (e) => payment(e));
            }
            hookExecutionCount++;
        }
    });
});
</script>

@endsection