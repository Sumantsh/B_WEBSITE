<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

    <h2 class="bill_heading">Billing Details</h2>

    <div id="formwrapper">


        
        <div class="rightwrapper">
            <div class="cart_icon">
                <i class="fa-solid fa-cart-arrow-down"></i>
                <h2>Cart Summary</h2>
            </div>

            <div class="order">
                <p><span class="qnty">1+</span> <span class="product_name">Lorem ipsum, </span> </p>
                <h2 class="item_price">$ <span>99</span></h2>
            </div>
        </div>


        <div class="leftformwrapper">


            <form action="" id="form1">
                @csrf

                <div class="input">
                    <label for="">First & Last Name</label>
                    <input type="text" placeholder="" required>
                </div>

                <div class="input">
                    <label for="">Number</label>
                    <input type="number" placeholder="" required>
                </div>

                <div class="input">
                    <label for="">Email</label>
                    <input type="emial" placeholder="" required>
                </div>

                <div class="input">
                    <label for="">Address</label>
                    <input type="text" placeholder="" required>
                </div>

                <div class="input">
                    <label for="">Country</label>
                    <input type="text" placeholder="" required>
                </div>

                <div class="state_input" style="background: ;">

                    <div class="state">
                        <label for="">State</label>
                        <input type="text" placeholder="" required>
                    </div>

                    <div class="state">
                        <label for="">Zip/Postal Code</label>
                        <input type="text" placeholder="" required>
                    </div>


                </div>

                <div class="paypal_wrapper">
                    <div class="paypal">
                        <input type="radio" name="paypal" id="paypal"><img class="paypalimg" src="{{ asset ('img/pngwing2.png')}}" alt="">
                    </div>
                   
                </div>

                {{-- {{ route ('paypal.create')}} --}}

                <div class="paybutton">
                    <a href="">Palce Order</a>
                </div>

            </form>
        </div>

    </div>


</body>

<script src="{{ asset ('js/new.js')}}"></script>

</html>
