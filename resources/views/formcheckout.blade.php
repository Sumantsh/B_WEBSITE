<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Checkout Form</title>
</head>

<style>
    body {
        /* background-color: rgba(0 0 0 /.8); */
    }
</style>

<body>
    {{-- @php
    print_r(session()->all());
    @endphp --}}
    <h2 class="bill_heading">Billing Details</h2>

    <div id="formwrapper">

        <div class="leftformwrapper">


            <form id="form1">
                <div class="input">
                    <label for="">Name</label>
                    <input type="text" placeholder="Fullname" name="name"  required>
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
                    <label for="">Address</label>
                    <input type="text" placeholder="Address" name="address" required>
                </div>

                <div class="input">
                    <label for="">Country</label>
                    <input type="text" placeholder="Country" name="country" required>
                </div>

                <div class="state_input" style="background: ;">

                    <div class="state">
                        <label for="">State</label>
                        <input type="text" placeholder="State" name="state" required>
                    </div>

                    <div class="state">
                        <label for="">Zip/Postal Code</label>
                        <input type="text" placeholder="Zip" name="zip" required>
                    </div>


                </div>

                <div class="paypal_wrapper">
                    <div class="paypal">
                        <input type="radio" name="paypal" id="paypal"><img class="paypalimg" src="{{ asset ('img/pngwing2.png')}}" alt="">
                    </div>
                </div>

                {{-- {{ route ('paypal.create')}} --}}

                <div class="paybutton">
                    <button id="submit" type="submit">Place Order</button>
                </div>

            </form>
        </div>

        <div class="rightwrapper">
            <div class="cart_icon">
                <i class="fa-solid fa-cart-arrow-down"></i>
                <h2>Cart Summary</h2>
            </div>

            <div class="order">
                <p><span class="qnty">1+</span> <span class="product_name">Lorem ipsum, dolor sit amet consectetur</span> </p>
                <h2>$ <span>99</span></h2>
            </div>
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
