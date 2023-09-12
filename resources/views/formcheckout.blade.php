<head>
    <meta charset="utf-8">
    <title>CHECKOUT PAGE</title>
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
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    {{-- <link href="lib/animate/animate.min.css" rel="stylesheet"> --}}
    {{-- <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> --}}
    {{-- <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet"> --}}

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <!-- <link href="./css/style.css" rel="stylesheet"> -->

    <link rel="stylesheet" href="{{ asset('css/newstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<div class="secure_wrapper">
    <div class="secure">
        <img src="{{ asset('img/secure.png') }}" alt="">
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

                    <p><span class="prd-total">{{ $price }}</span> $</p>

                </div>
                {{-- <p><span class="qnty">1+</span> <span class="product_name">{{ $prd_title }}</span> </p> --}}
                {{-- <h2 class="item_price text-light"><span>$ {{ $price }}</span></h2> --}}
            </div>


            <div class="differ">
                <li><span class="star_mark">*</span> total amount on your credit card statement may differ as the charge
                    may be processed overseas at currency exchange rate of the issuing bank</li>
            </div>

            <table class="shiping_table">
                <tr>
                    <td class="subtotal">Subtotal</td>
                    <td class="total"><span class="subtotal-price">{{ $price }}</span> $</td>
                </tr>

                <tr>
                    <td class="subtotal">Shipping</td>

                    <td class="radio_td">

                        <div class="shiping_grp">
                            <input type="radio" required name="normal_shiping" id="normal_shiping"
                                data-shippingCharge="12" checked><span class="shipping">5-10 Day Shipment</span> <span
                                class="shipping_price" style="color: black;margin:0px 0px;font-weight:700;">15</span>
                            <span class="" style="color: black;margin:0px 0px">$</span>
                        </div>

                        <div class="shiping_grp">
                            <input type="radio" required name="normal_shiping" id="normal_shiping"
                                data-shippingCharge="25"><span class="shipping">3-4 Day Shipment</span> <span
                                style="color: black;font-weight:700; margin:0px 2 5px" class="shipping_price">25</span> <span
                                style="color: black; margin:0px 0px" class="">$</span>
                        </div>

                        <div class="shiping_grp">
                            <input type="radio" required name="normal_shiping" id="normal_shiping" disabled><span
                                class="shipping">1 Day Shipment</span> <span class="shipping"
                                style="color: black; text-decoration:line-through;:0px 5px;text-decoration-color: var(--theme_color);">Not
                                Available</span>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="subtotal">Total</td>
                    <td class="total"><span class="total-price">{{ $price }}</span> $</td>
                </tr>
            </table>

            <div id="paypal-button-container"></div>

            <div class="card">
                <img src="{{ asset('img/visa_master.png') }}" alt="">
            </div>
        </div>
    </div>


    <div class="leftformwrapper">
        <h2 class="bill_heading">Billing Address</h2>
        <form id="form1" method="POST" action="">
            <div class="input" id="first_last_wrapper" style="flex-direction: row;gap:20px;">
                <label for="">First Name</label>
                <input type="text" required placeholder="First Name" name="firstname" required>
                <label for="">Last Name</label>
                <input type="text" required placeholder="Last Name" name="lastname" required>
            </div>

            <div class="input">
                <label for="">Number</label>
                <input type="number" required placeholder="Phone Number" name="phone_number" required>
            </div>

            <div class="input">
                <label for="">Email</label>
                <input type="email" required placeholder="Email" name="email" required>
            </div>

            <div class="input">
                <label for="date" style="display: block">Date of Birth</label>
                <input type="date" required name="date" required>
            </div>

            <div class="input">
                <label for="">Address</label>
                <input type="text" required class="shipping_address" placeholder="Address" name="address"
                    required>
            </div>

            <div class="input">
                <label for="city">City</label>
                <input type="text" required class="shipping_city" placeholder="City" name="city" required>
            </div>

            <div class="input">
                <label for="">Country</label>
                <input type="text" required placeholder="Country" class="shipping_Country" name="country"
                    required>
            </div>

            <div class="state_input" style="background: ;">

                <div class="state">
                    <label for="">State</label>
                    <input style="padding:10px" class="shipping_state" type="text" required placeholder="State"
                        name="state" required>
                </div>

                <div class="state">
                    <label for="">Zip/Postal Code</label>
                    <input type="text" required class="shipping_zip" style="padding:10px" placeholder="Zip"
                        name="zip" required>
                </div>
            </div>


            <div class="checkbox">
                <input class="billing_checked" type="checkbox">
                <label>
                    <strong>Is the Shipping Address the same as the Billing Address?</strong>
                </label>
            </div>

            <div class="shipping">
                <h3 style="margin: 4% 0px;padding-left:20px">Shipping Address</h3>

                <div class="input">
                    <label for="">Address</label>
                    <input type="text" required placeholder="Address" name="_shipping_address"
                        class="billing_address" required>
                </div>

                <div class="input">
                    <label for="city">City</label>
                    <input type="text" required class="billing_city" placeholder="City" name="billing_city"
                        required>
                </div>

                <div class="input">
                    <label for="">Country</label>
                    <input type="text" required class="billing_country" placeholder="Country"
                        name="billing_country" required>
                </div>

                <div class="state_input" style="background: ;">

                    <div class="state">
                        <label for="">State</label>
                        <input style="padding:10px" class="billing_state" type="text" required
                            placeholder="State" name="billing_state" required>
                    </div>

                    <div class="state">
                        <label for="">Zip/Postal Code</label>
                        <input type="text" required="" class="billing_zip" style="padding:10px"
                            placeholder="Zip" name="billing_zip" required>
                    </div>


                </div>

                {{-- <div class="button_wrapper">

                    <div class="paybutton">
                        <input type="checkbox" name="" id="">
                        <button id="paynow" class="paynow-paypal" type="button"> <span><i
                                    class="fa-brands fa-paypal"></i></span> Paypal<span
                                style="color: white;padding:0px 10px"
                                class="toPay">{{ $price }}</span></button>

                    </div>

                    <div class="paybutton">
                        <input type="checkbox" name="" id=""> <button id="stripe_paynow"
                            class="paynow-stripe" type="button"><span><i class="fa-brands fa-stripe-s"></i></span>
                            Stipe<span style="color: white;padding:0px 10px"
                                class="toPay-stripe">{{ $price }}</span></button>


                    </div>


                    <div class="paybutton">
                        <input type="checkbox" name="" id=""> <button id="card_paynow"
                            class="paynow-stripe" type="button"><span><i class="fa-solid fa-credit-card"></i></span>
                            Debit/Credit</button>
                    </div>
                </div> --}}

                {{-- <div class="paypal_wrapper">
                    <div class="paypal">
                        <input type="radio" name="paypal" id="paypal"><img class="paypalimg" src="{{ asset ('img/pngwing2.png')}}" alt="">
                    </div>
                </div> --}}

                {{-- {{ route ('paypal.create')}} --}}

        </form>


    </div>
</div>

<script>
    // const radio = document.getElementsByName("normal_shiping");

    // function updatePrices() {
    //     for (let i = 0; i < radio.length; i++) {
    //         if (radio[i].checked) {
    //             document.querySelector(".total-price").innerHTML = Number(document.querySelector(".subtotal-price")
    //                 .innerHTML) + Number(radio[i].dataset.shippingcharge);
    //             document.querySelector(".toPay").innerHTML = document.querySelector(".total-price").innerHTML;
    //             document.querySelector(".toPay-stripe").innerHTML = document.querySelector(".total-price").innerHTML;
    //         }
    //     }
    // }
    // for (let i = 0; i < radio.length; i++) {
    //     radio[i].addEventListener("change", () => {
    //         document.querySelector(".total-price").innerHTML = Number(document.querySelector(".subtotal-price")
    //             .innerHTML) + Number(radio[i].dataset.shippingcharge);
    //         document.querySelector(".toPay").innerHTML = document.querySelector(".total-price").innerHTML;
    //         document.querySelector(".toPay-stripe").innerHTML = document.querySelector(".total-price")
    //         .innerHTML;
    //     })
    // }
    // updatePrices();

    const input_checked = document.querySelector('.billing_checked');
    // console.log(input_checked);
    // console.log("error");

    input_checked.addEventListener('click', (e) => {

        if (input_checked.checked) {
            let shipping_address = document.querySelector('.shipping_address').value
            let shipping_city = document.querySelector('.shipping_city').value
            let shipping_Country = document.querySelector('.shipping_Country').value
            let shipping_state = document.querySelector('.shipping_state').value
            let shipping_zip = document.querySelector('.shipping_zip').value

            document.querySelector('.billing_address').value = shipping_address
            document.querySelector('.billing_city').value = shipping_city
            document.querySelector('.billing_Country').value = shipping_Country
            document.querySelector('.billing_state').value = shipping_state
            document.querySelector('.billing_zip').value = shipping_zip

            // console.log(e);
        }
    });
</script>
<script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_SANDBOX_CLIENT_ID') }}&currency=USD"></script>
<script>




    paypal.Buttons({
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '10' // Set the total amount dynamically from your form
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                window.location.href = "/payment/success";
            });
        }
    }).render('#paypal-button-container'); // Render the PayPal Smart Button inside the container
</script>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/new.js') }}"></script>
