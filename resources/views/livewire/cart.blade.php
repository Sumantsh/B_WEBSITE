<div>
    @if($isOpen)
    <div id="cartwindow">
        <div class="innerwindow">
            <div class="topwrapper">
                <div class="icon" style="position: relative;"><span><img src="{{ asset ('img/icon/bag.svg') }}" width="30px"
                            style="position: relative;" alt=""></span></div>
                <div class="heading" style="padding: 0px 10px;">
                    <p>Cart</p>
                </div>
    
                <div class="cross" style="cursor: pointer;" wire:click="toggleCart">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
    
            @foreach($products as $product)
                <div id="productvalues" wire:key="{{ $product['UID'] }}">
                    <div class="productimg">
                        <img src="{{asset ($product['prd_image'])}}"  alt="">
                    </div>
    
                    <div class="numberofitems">
                        <p style="font-family: 'Poppins', sans-serif; "><span>{{substr($product['prd_name'], 0,  12) . "..."}}</span> - <br>
                        </p>
                        <p><span id="itemsvalues">{{$product['prd_qty']}}</span> <span>X</span> <span>$ <span id="productprice">{{$product['price']}}</span>
                        <span>=</span> <span>$</span> <span id="totalprice">{{ $product['prd_qty'] * $product['price'] }}</span> </span></p>
                    </div>
    
                    <div class="delete" wire:click="remove('{{ $product['UID'] }}')">
                        <i class="fa-regular fa-trash-can"></i>
                    </div>
                </div>
            @endforeach
    
            <div id="checkout" style="background: ">
                @php 
                        $total = 0;
                        foreach ($products as $product) {
                            $total += $product['price'] * $product['prd_qty'];
                        }
                @endphp
    
                @if(count($products)> 0)
                    <div class="subtotal"> Subtotal: <span style="margin-left: 0%; color: #57BF6D;">$</span> <span style="margin-left: -5px; color: #57BF6D;">
                        {{ $total }}    
                    </span> 
                    </div>
                @endif
            
            <div class="buttonwrapper">
                @if(count($products))
                    <div class="checkout" wire:click="emptyCart()">
                        <a href="">CHECKOUT</a>
                    </div>
                @endif
                <div class="viewcart">
                    <a href="">VIEW CART</a>
                </div>
    
                <div class="continushoping">
                    <a href="">CONTINUE SHOPPING</a>
                </div>
            </div>
            </div>
        </div>
    </div>
    @endif
    
    <div id="carticon2" wire:click="toggleCart">
        <img src="{{ asset ('img/icon/bagicon.svg') }}" class="bagicon" alt="">
        <div
            style="position: absolute; background: black; border-radius: 50%; width:40px;height:40px; color: white; text-align: center; top: -12px; left: -7px; box-shadow: 2px 2px 4px rgba(0, 0, 0,.4) ; display:flex; justify-content:center; align-items:center; ">
            <span>{{count($products)}}</span></div>
    </div>
    </div>