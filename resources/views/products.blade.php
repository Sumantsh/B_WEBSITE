@extends('layout.main')

@section('products')

<div class="products-page-container">

    <div class="sort-by">
        <div class="sort-by-container">
            <label for="sorting">Sort By</label>
            <select name="sorting" id="sorting">
                <option value="Position">Position</option>
                <option value="Product Name">Product Name</option>
                <option value="Price">Price</option>
                <option value="Bestsellers">Bestsellers</option>
            </select>
        </div>
    </div>

    <!-- grid to show out the products -->
    <div class="products-grid">
        <div class="products-grid-container">

            @foreach ($products as $product)
            <a href="product_details/{{$product['prd_id']}}">
                <div class="product-show">
                    <div class="product-show-image">
                        <img src="{{asset ($product['prd_img'])}}" >
                    </div>
                    <h3 class="product-show-name">{{$product['prd_title']}}</h3>
                    <h3 class="product-show-price"><span>$</span><span>{{$product['prd_price']}}</span></h3>
                    <h4 class="add-to-favorites">Add to Favorites</h4>
                </div>
                </a>
            @endforeach

        </div>
    </div>
</div>

@endsection
   