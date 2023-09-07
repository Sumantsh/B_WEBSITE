<!-- resources/views/payment/checkout.blade.php -->
@extends('layout.main')

@section('stripe')
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form id="payment-form">
                    <div class="form-group">
                        <label for="card-element">
                            Credit or debit card
                        </label>

                        <div id="card-element">
                            <!-- A Stripe Element will be inserted here. -->
                        </div>

                        <!-- Used to display form errors. -->
                        <div id="card-errors" role="alert"></div>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Pay
                    </button>
                </form>
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
        var card = elements.create('card');

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
@endsection
