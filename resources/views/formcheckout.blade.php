<!DOCTYPE html>
<html lang="en">


@include('header')


    <h2 class="bill_heading">Billing Details</h2>

    <div id="formwrapper">

        <div class="leftformwrapper">


            <form action="" id="form1">

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

        <div class="rightwrapper">
            <div class="cart_icon">
                <i class="fa-solid fa-cart-arrow-down"></i>
                <h2>Cart Summary</h2>
            </div>

            <div class="order">
                <p><span class="qnty">1+</span> <span class="product_name">Lorem ipsum, dolor sit amet consectetur</span> </p>
                <h2 style="color: white">$ <span>99</span></h2>
            </div>
        </div>

    </div>


@include('footer')
