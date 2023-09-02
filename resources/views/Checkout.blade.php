






        <head>
            <meta charset="utf-8">
            <title>@yield('title')</title>
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
            <meta content="" name="keywords">
            <meta content="" name="description">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <!-- Favicon -->
            <link href="img/favicon.ico" rel="icon">
        
            <!-- Google Web Fonts -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 
        
            <!-- Icon Font Stylesheet -->
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        
            <!-- Libraries Stylesheet -->
            {{-- <link href="lib/animate/animate.min.css" rel="stylesheet"> --}}
            {{-- <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> --}}
            {{-- <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet"> --}}
        
            <!-- Customized Bootstrap Stylesheet -->
            <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        
            <!-- Template Stylesheet -->
            <!-- <link href="./css/style.css" rel="stylesheet"> -->
        
            <link rel="stylesheet" href="{{asset('css/newstyle.css')}}">
            <link rel="stylesheet" href="{{asset('css/style.css')}}">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        </head>
        
        <div class="secure_wrapper">
            <div class="secure">
                <img src="{{ asset ('img/secure.png')}}" alt="">
            </div>
        </div>

        <div class="checkout_wrapper">
            <h2>Checkout</h2>
        </div>
            
           
        
            <div id="formwrapper">
        
              
                
                <div class="rightwrapper">
        
                    <div class="cart_wapper">
        
                    <div class="cart_icon">
                        <i class="fa-solid fa-cart-arrow-down"></i>
                        <h2>Cart Summary</h2>
                    </div>
        
                    <div class="new_order">
                        <div class="price_wrapper">
                            <h2>Your Order</h2>
                            <p><span>{{$product->prd_price}}</span> $</p>
                        </div>
                    </div>


        
                    
                    <div class="differ">
                        <li><span class="star_mark">*</span>  total amount on your credit card statement may differ as the charge may be processed overseas at currency exchange rate of the issuing bank</li>
                    </div>
        
                  
        
                    <table class="shiping_table">
                        <tr>
                            <td class="subtotal">Subtotal</td>
                            <td class="total">228  $</td>
                        </tr>
        
                        <tr>
                            <td class="subtotal">Shipping</td>
                            
                            <td class="radio_td">
                                
                            <div class="shiping_grp">
                                <input type="radio" name="normal_shiping" id="normal_shiping"><span>5-10 Day Shipment</span> <span style="color: skyblue;margin:0px 5px">12</span> <span style="color: skyblue;margin:0px 5px">$</span>
                            </div>
                                
                            <div class="shiping_grp">
                                <input type="radio" name="normal_shiping" id="normal_shiping"><span>3-4 Day Shipment</span> <span style="color: skyblue;margin:0px 5px">25</span> <span style="color: skyblue;margin:0px 5px">$</span>
                            </div>
                                
                            <div class="shiping_grp">
                                <input type="radio" name="normal_shiping" id="normal_shiping"><span>1 Day Shipment</span> <span style="color: skyblue; text-decoration:line-through;:0px 5px;text-decoration-color: var(--theme_color);">Not Available</span> 
                            </div>
                        </td>
                        </tr>
        
                        <tr>
                            <td class="subtotal">Total</td>
                            <td class="total">1000 $</td>
                        </tr>
        
                    </table>
        
                    <div class="card">
                        <img src="{{asset ('img/visa_master.png')}}" alt="">
                    </div>
        
                </div>
        
                
                <div class="paybutton">
                    <button id="paynow" class="" type="submit">Pay Now USD<span style="color: skyblue;padding:0px 10px">188.52</span></button>
                </div>
        
        
        
            </div>
        
        
            <div class="leftformwrapper">

                <h2 class="bill_heading">Billing Details</h2>
    
                <form id="form1">
                    <div class="input" id="first_last_wrapper" style="flex-direction: row;gap:20px;">
                        <label for="">First Name</label>
                        <input type="text" placeholder="Firstname" name="firstname"  required>
                        <label for="">Last Name</label>
                        <input type="text" placeholder="Lastname" name="lastname"  required>
                    </div>
    
                    <div class="input">
                        <label for="">Number</label>
                        <input type="number" placeholder="Phone Number" name="phone_number" required>
                    </div>
    
                    <div class="input">
                        <label for="">Email</label>
                        <input type="email" placeholder="Email" name="email" required>
                    </div>
    
                    <div class="input">
                        <label for="date" style="display: block">Date of Birth</label>
                        <input type="date" " name="date" required>
                    </div>
    
                    <div class="input">
                        <label for="">Address</label>
                        <input type="text" placeholder="Address" name="address" required>
                    </div>
    
                    <div class="input">
                        <label for="city">City</label>
                        <input type="text" placeholder="City" name="city" required>
                    </div>
    
                    <div class="input">
                        <label for="">Country</label>
                        <input type="text" placeholder="Country" name="country" required>
                    </div>
    
                    <div class="state_input" style="background: ;">
    
                        <div class="state">
                            <label for="">State</label>
                            <input style="padding:10px" type="text" placeholder="State" name="state" required>
                        </div>
    
                        <div class="state">
                            <label for="">Zip/Postal Code</label>
                            <input type="text" style="padding:10px" placeholder="Zip" name="zip" required>
                        </div>
    
    
                    </div>
    
                    {{-- <div class="paypal_wrapper">
                        <div class="paypal">
                            <input type="radio" name="paypal" id="paypal"><img class="paypalimg" src="{{ asset ('img/pngwing2.png')}}" alt="">
                        </div>
                    </div> --}}
    
                    {{-- {{ route ('paypal.create')}} --}}
    
    
                  
    
                </form>
            </div>
        
                
        
            </div>
        
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset ('js/app.js')}}" ></script>
        <script src="{{asset ('js/new.js')}}" ></script>

