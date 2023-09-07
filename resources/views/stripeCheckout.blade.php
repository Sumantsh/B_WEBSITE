@extends('layout.main')

@section('stripe')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <img src="https://stripe.com/img/v3/home/social.png" alt="Stripe" class="stripe-logo">
                </div>
                <div class="card-body">
                    <form id="payment-form">
                        <div class="form-group">
                            <label for="card-element">Card Information</label>
                            <div id="card-element" class="form-control">
                                <!-- A Stripe Element will be inserted here. -->
                            </div>

                            <!-- Used to display form errors. -->
                            <div id="card-errors" role="alert"></div>
                        </div>

                        <div class="img-form-group">
                            <img src="{{asset("img/visa.png")}}" alt="Visa" class="card-brand">
                            <img src="{{asset("img/mastercard.png")}}" alt="MasterCard" class="card-brand">
                            <img src="{{asset("img/americanexpress.png")}}" alt="American Express" class="card-brand">
                        </div>

                        <button type="submit" class="btn btn-primary btn-block btn-lg">
                            Pay Now
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://js.stripe.com/v3/"></script>
<script>
    // Create a Stripe client.
    var stripe = Stripe('{{ config('services.stripe.key') }}');

    // Create an instance of Elements.
    var elements = stripe.elements();

    // Create an instance of the card Element.
    var card = elements.create('card', {
        style: {
            base: {
                fontSize: '16px',
                color: '#333',
                fontFamily: 'Arial, sans-serif',
            },
        },
    });

    // Add an instance of the card Element into the `card-element` div.
    card.mount('#card-element');

    // Handle real-time validation errors from the card Element.
    card.addEventListener('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });

    // Handle form submission.
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();

        stripe.confirmCardPayment("{{ $clientSecret }}", {
            payment_method: {
                card: card
            }
        }).then(function(result) {
            if (result.error) {
                // Show error to your customer.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
                // Payment succeeded, handle the success here.
                // You can send an AJAX request to the server to complete the order.

                // Redirect to the success page for now.
                window.location.href = "{{ route('payment.success') }}";
            }
        });
    });
</script>

<style>
    /* Adjust card header styles */
    .card-header {
        text-align: center;
    }

    /* Style the Stripe logo */
    .stripe-logo {
        max-width: 200px;
        margin: 0 auto;
    }

    /* Add additional styles to the form */
    .card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

     /* Add styles for card brands */
    .card-brand {
        height: 30px;
        margin-right: 10px;
    }
    .container {
    padding: 40px;
    text-align: center;
}

/* Adjust form styles for larger width */
#payment-form {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
}

/* Style the card element */
#card-element {
    border: 1px solid #ccc;
    padding: 15px;
    border-radius: 8px;
    margin-bottom: 20px;
    font-size: 16px;
}

/* Style form errors */
#card-errors {
    color: #dc3545; /* Red color for error messages */
    margin-top: 10px;
    font-size: 14px;
}

/* Style the pay button */
.btn-primary {
    background-color: #007bff; /* Blue color for the button */
    color: #fff; /* White text color */
    border: none;
    margin: 1rem 0;
    /* padding: 15px 30px; */
    border-radius: 8px;
    cursor: pointer;
    font-size: 18px;
    transition: background-color 0.2s ease-in-out;
}

.img-form-group {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
}

/* Add hover effect for the pay button */
.btn-primary:hover {
    background-color: #0056b3; /* Slightly darker blue on hover */
}
</style>
@endsection