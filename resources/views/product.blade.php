@extends('layout')

@section('content')
<div class="container mt-5 text-center">
    <h2>Laravel 7 PayPal Integration Example</h2>
    <a href="{{ route('paypal.create') }}" class="btn btn-primary mt-3">Pay $224 via Paypal</a>
</div>    
@endsection
