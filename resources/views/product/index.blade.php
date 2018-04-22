@extends('layouts.master')

@section('content')
<h1>Product List <a href="{{route('product.create')}}" class="btn btn-primary">Add New Product</a> </h1>
<div class="table">
    <table class="table table-bordered table-striped table-hover ">
        <thead>
        <tr>
            <th>S.N.</th>
            <th>Product Type Code</th>
            <th>Merchandise Number</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Color</th>
            <th>Product Size</th>
            <th>Product Description</th>
            <th>Other Product Details</th>

        </tr>
        </thead>
        <tbody>
            @foreach($products as $key=>$product)
                <tr>
                    <td>{{ $key + 1 }}</td>

            <td>{{ $product->product_type_code }}</td>
            <td>{{ $product->return_merchandise_authorization_nr }}</td>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->product_price }}</td>
            <td>{{ $product->product_color }}</td>
            <td>{{ $product->product_size }}</td>
            <td>{{ $product->product_description }}</td>
            <td>{{ $product->other_product_details }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection