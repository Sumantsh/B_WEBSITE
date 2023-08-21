@extends('layout.main')

@section('add_prd')

    <div class="formwrapper">
        <form action="{{url('/')}}/add_product" method="post" id="add_form">
            @csrf

            <div class="devide">
            <div>
            <label for="id">ID</label>
            <input type="number" id="id" name="id">

            <label for="title">Title</label>
            <input type="text" id="title" name="title">

            <label for="price">Price</label>
            <input type="text" id="price" name="price">

            <label for="company">Company</label>
            <input type="text" id="company" name="company">

            <label for="prd_cat">Product Category</label>
            <input type="text" id="prd_cat" name="prd_cat">
            </div>

            <div style="display: flex;flex-direction:column">

                <label for="highlight">Highlight</label>
                <textarea id="highlight" name="highlight" cols="30" rows="2"></textarea>

                <label for="prd_disc">Product Discription</label>
                <textarea id="prd_disc" name="prd_disc" cols="30" rows="2"></textarea>


            <label for="prd_img">Product Image</label>
            <input type="text" id="prd_img" name="prd_img">

            <label for="stock">Stock</label>
            <input type="number" id="stock" name="stock">

        </div>

            </div>

            <button type="submit" name="submit" id="submit">Submit</button>

        </form>
    </div>

@endsection