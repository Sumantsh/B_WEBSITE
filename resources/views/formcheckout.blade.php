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
                            <input type="radio"  name="normal_shiping" id="normal_shiping"
                                data-shippingCharge="15" checked><span class="shipping">5-10 Day Shipment</span> <span
                                class="shipping" style="color: skyblue;margin:0px 10px">15</span>
                            <span class="shipping" style="color: skyblue;margin:0px 0px">$</span>
                        </div>

                        <div class="shiping_grp">
                            <input type="radio"  name="normal_shiping" id="normal_shiping"
                                data-shippingCharge="25"><span class="shipping">3-4 Day Shipment</span> <span
                                style="color: skyblue;margin:0px 2 5px" class="shipping">25</span> <span
                                style="color: skyblue; margin:0px 0px" class="shipping">$</span>
                        </div>

                        <div class="shiping_grp">
                            <input type="radio"  name="normal_shiping" id="normal_shiping" disabled><span
                                class="shipping">1 Day Shipment</span> <span class="shipping"
                                style="color: skyblue; text-decoration:line-through;:0px 5px;text-decoration-color: var(--theme_color);">Not
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

            <div class="paybutton">
                <button id="stripe_paynow" class="paynow-stripe" type="button"><span><i class="fa-brands fa-stripe-s"></i></span>Stipe<span style="color: white;padding:0px 10px" class="toPay-stripe">{{ $price }}</span></button>
            </div>

            <div class="card">
                <img src="{{ asset('img/visa_master.png') }}" alt="">
            </div>
        </div>
    </div>


    <div class="leftformwrapper">
        <h2 class="bill_heading">Billing Address</h2>
        <form id="form1">
            <div class="input" id="first_last_wrapper" style="flex-direction: row;gap:20px;">
                <label for="">First Name</label>
                <input type="text" required placeholder="Firstname" name="firstname" required>
                <label for="">Last Name</label>
                <input type="text" required placeholder="Lastname" name="lastname" required>
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
                <label for="">Address Line 1</label>
                <input type="text" required class="billing_address_line1" placeholder="Address Line 1" name="billing_address_line1"
                    required>
            </div>


            <div class="input">
                <label for="">Address Line 2</label>
                <input type="text" required class="billing_address_line2" placeholder="Address Line 2" name="billing_address_line2"
                    required>
            </div>

            <div class="input">
                <label for="city">City</label>
                <input type="text" required class="billing_city" placeholder="City" name="billing_city" required>
            </div>

            <div class="input">
                <label for="">Country</label>
                <input type="text" required placeholder="Country" class="billing_country" name="billing_country"
                    required>
            </div>

            <div class="state_input" style="background: ;">

                <div class="state">
                    <label for="">State</label>
                    <input style="padding:10px" class="billing_state" type="text" required placeholder="State"
                        name="billing_state" required>
                </div>

                <div class="state">
                    <label for="">Zip/Postal Code</label>
                    <input type="text" required class="billing_zip" style="padding:10px" placeholder="Zip"
                        name="billing_zip" required>
                </div>
            </div>


            <div class="checkbox">
                <input class="checked" type="checkbox" >
                <label>
                    <strong>Is the Shipping Address the same as the Billing Address?</strong>
                </label>
            </div>

            <div class="shipping">
                <h3 style="margin: 4% 0px;padding-left:20px">Shipping Address</h3>

                <div class="input">
                    <label for="">Address Line 1</label>
                    <input type="text" required class="shipping_address_line1" placeholder="Address Line 1" name="shipping_address_line1"
                        required>
                </div>
    
    
                <div class="input">
                    <label for="">Address Line 2</label>
                    <input type="text" required class="shipping_address_line2" placeholder="Address Line 2" name="shipping_address_line2"
                        required>
                </div>

                <div class="input">
                    <label for="city">City</label>
                    <input type="text" required class="shipping_city" placeholder="City" name="shipping_city"
                        required>
                </div>

                <div class="input">
                    <label for="">Country</label>
                    <input type="text" required class="shipping_country" placeholder="Country"
                        name="shipping_country" required>
                </div>

                <div class="state_input" style="background: ;">
                    <div class="state">
                        <label for="">State</label>
                        <input style="padding:10px" class="shipping_state" type="text" required
                            placeholder="State" name="shipping_state" required>
                    </div>

                    <div class="state">
                        <label for="">Zip/Postal Code</label>
                        <input type="text" required="" class="shipping_zip" style="padding:10px"
                            placeholder="Zip" name="shipping_zip" required>
                    </div>
                </div>
        </form>


    </div>
</div>

<script>
    const radio = document.getElementsByName("normal_shiping");

    function updatePrices() {
        for (let i = 0; i < radio.length; i++) {
            if (radio[i].checked) {
                document.querySelector(".total-price").innerHTML = Number(document.querySelector(".subtotal-price")
                    .innerHTML) + Number(radio[i].dataset.shippingcharge);
                document.querySelector(".toPay-stripe").innerHTML = document.querySelector(".total-price").innerHTML;
            }
        }
    }
    for (let i = 0; i < radio.length; i++) {
        radio[i].addEventListener("change", () => {
            document.querySelector(".total-price").innerHTML = Number(document.querySelector(".subtotal-price")
                .innerHTML) + Number(radio[i].dataset.shippingcharge);
            document.querySelector(".toPay-stripe").innerHTML = document.querySelector(".total-price")
                .innerHTML;
        })
    }

    updatePrices();

    const input_checked = document.querySelector('.checked');
    input_checked.addEventListener('click', () => {
        if (input_checked.checked) {
            let billing_line_one = document.querySelector('.billing_address_line1').value
            let billing_line_two = document.querySelector('.billing_address_line2').value
            let billing_city = document.querySelector('.billing_city').value
            let billing_country = document.querySelector('.billing_country').value
            let billing_state = document.querySelector('.billing_state').value
            let billing_zip = document.querySelector('.billing_zip').value

            document.querySelector('.shipping_address_line1').value = billing_line_one
            document.querySelector('.shipping_address_line2').value = billing_line_two
            document.querySelector('.shipping_city').value = billing_city
            document.querySelector('.shipping_country').value = billing_country
            document.querySelector('.shipping_state').value = billing_state
            document.querySelector('.shipping_zip').value = billing_zip
        }
    })
</script>
<script src="https://www.paypal.com/sdk/js?client-id={{ config('services.paypal.clientID') }}&currency=USD"></script>
<script>
    const totalAmount = document.querySelector(".total-price").innerHTML;

    const validated = () => {
        const fields = document.querySelectorAll("input[required]");
        for(let i = 0; i < fields.length; i++) {
            if(fields[i].value) {
                continue;
            } else {
                return false;
            }
        }
        return true;
    }

    paypal.Buttons({
        onClick: function() {
            if(!validated()) {
                alert("Please fill in all the details carefully");
                return false;
            }
        },
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: totalAmount
                    }
                }],
                application_context: {
                    shipping_preference: 'NO_SHIPPING'
                }
            });
        },
        onApprove: function(data, actions) {
            let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            const form_data = {
                firstname: $("[name=firstname]").val(),
                lastname: $("[name=lastname]").val(),
                phoneNumber: $("[name=phone_number]").val(),
                email: $("[name=email]").val(),
                billing_line_one: $("[name=billing_address_line1]").val(),
                billing_line_two: $("[name=billing_address_line2]").val(),
                billing_country: $("[name=billing_country]").val(),
                billing_city: $("[name=billing_city]").val(),
                billing_state: $("[name=billing_state]").val(),
                billing_zip: $("[name=billing_zip]").val(),
                shipping_line_one: $("[name=shipping_address_line1]").val(),
                shipping_line_two: $("[name=shipping_address_line2]").val(),
                shipping_country: $("[name=shipping_country]").val(),
                shipping_city: $("[name=shipping_city]").val(),
                shipping_state: $("[name=shipping_state]").val(),
                shipping_zip: $("[name=shipping_zip]").val(),
            };
            
                return actions.order.capture().then(function(details) {
                if (details.status === "COMPLETED") {
                    return fetch('/form-route-paypal', {
                        method: 'post',
                        headers: {
                            'content-type': 'application/json',
                            "Accept": "application/json, text-plain, */*",
                            "X-Requested-With": "XMLHttpRequest",
                            "X-CSRF-TOKEN": token
                        },
                        body: JSON.stringify({
                            orderId: data.orderID,
                            id: details.id,
                            status: details.status,
                            payerEmail: details.payer.email_address,
                            formData: form_data
                        })
                    }).then(status).then((response) => {
                        window.location.href = "{{ route('paypal.success') }}";
                    }).catch((err) => {
                        window.location.href = "{{ route('paypal.error') }}"; 
                    })
                }
            });
        }
    }).render('#paypal-button-container');
</script>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/new.js') }}"></script>
