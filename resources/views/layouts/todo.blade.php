@extends('layouts.app')
@section('content')
<div class="container">

    <div>
        <h3>Please enter you name: </h3>
        <form class="form-inline" method="post" action="store">
            @csrf
            <input type="hidden" name="_token" value="ZTp076smOAQZQcLjplDuaAjj9PukkjH4VJYbJlbZ" />

            <div class="form-group">
                <input type="text" class="form-control" name="name" />
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <hr>
        <h3>Hello, nobody!</h3>
    </div>
</div>
<div class="card uper">
    <div class="card-header">
        Add Product
    </div>
    <div class="card-body">
        <form method="post" action="">
            <div class="form-group">
                <label for="name">Product Name:</label>
                <input type="text" class="form-control" name="product_name" />
            </div>
            <div class="form-group">
                <label for="price">Product Price :</label>
                <input type="text" class="form-control" name="product_price" />
            </div>
            <div class="form-group">
                <label for="quantity">Product Quantity:</label>
                <input type="text" class="form-control" name="product_qty" />
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>
</div>

@endsection
