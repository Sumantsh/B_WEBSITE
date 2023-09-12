<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset ('css/newstyle.css')}}">
    <link rel="stylesheet" href="{{asset ('css/style.css')}}">
</head>
<body style="background: rgba(0 0 0  /.1)">


    <div class="success_wrapper">


    
        <div class="wrapper">

            <div class="ssl_wrapper">
                <div class="ssl_image">
                    <img width="100%" src="{{asset ('img/ssl.png')}}" alt="" class="ssl">
                </div>

                <div class="data_safe">
                    <h2>
                        Data  Protected By CloudFlare Security
                    </h2>
                </div>

                <div class="cloud">
                    <img width="100%" src="{{asset ('img/cloudflare.svg')}}" alt="" class="ssl">
                </div>

            </div>

            


            <div class="form_wrapper">
                
                <div class="first">
                    <h2 >Shipping Address</h2>

                    <div class="shipping_details">
                        <p> <span class="first_span">First Name:</span> <span class="last_span">{{$shippingAddress['firstname']}}</span></p>
                        <p><span class="first_span">Last Name: </span><span class="last_span">{{$shippingAddress['lastname']}}</span></p>
                        <p><span class="first_span">Address: </span><span class="last_span">{{$shippingAddress['address'] . ", ". $shippingAddress['state'] . ", " . $shippingAddress['country'] . ", " . $shippingAddress['zip']}}</span></p>
                        <p><span class="first_span">Email: </span><span class="last_span">{{$shippingAddress['email']}}</span></p>
                        <p><span class="first_span">Phone Number: </span><span class="last_span">{{$shippingAddress['phoneNumber']}}</span></p>
                    </div>

                </div>

                <div class="first secnd">
                    <h2 class="secnd_text">Thank Your For Order</h2>

                    <div class="order_id">
                        <h2 class="order_id_title">"ORDER ID"</h2>
                        <h2 class="order_id_number" style="border: none">{{$orderId}}</h2>
                    </div>
                </div>
        
            </div>

        </div>
    </div>
    
</body>
</html>