@extends("layouts.master")
@section('content')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6" style="background: #dbe1e9">
                <div class="text-center">
                    <h2>Product</h2>
                </div>
                <form method="POST" action="/product/store">
                    {{ csrf_field() }}
                    <div class="form-group">

                        <label for="product_type_code">Product Type Code</label>

                        <input type="text" class="form-control" id="product_type_code" name="product_type_code"  value="{{old('product_type_code')}}" placeholder="product_type_code" required>

                    </div>

                    <div class="form-group">

                        <label for="return_merchandise_authorization_nr">Merchandise</label>

                        <input type="text" class="form-control" id="return_merchandise_authorization_nr" name="return_merchandise_authorization_nr" value="{{ old('return_merchandise_authorization_nr') }}" placeholder="return_merchandise_authorization_nr" required>

                    </div>
                    <div class="form-group">

                        <label for="product_name">Product Name</label>

                        <input type="text" class="form-control" id="product_name" name="product_name" value="{{ old('product_name') }}" placeholder="Product Name" required>

                    </div>
                    <div class="form-group">

                        <label for="product_price">Product Price</label>

                        <input type="text" class="form-control" id="product_price" name="product_price" value="{{ old('product_price') }}" placeholder="Product Price" required>

                    </div>
                    <div class="form-group">

                        <label for="product_color">Product Color</label>

                        <input type="text" class="form-control" id="product_color" name="product_color" value="{{ old('product_color') }}" placeholder="Product Color" required>

                    </div>
                    <div class="form-group">

                        <label for="product_size">Product Size</label>

                        <input type="text" class="form-control" id="product_size" name="product_size" value="{{ old('product_size') }}" placeholder="Product Size" required>

                    </div>
                    <div class="form-group">

                        <label for="product_description">Product Description</label>

                        <input type="text" class="form-control" id="product_description" name="product_description" value="{{ old('product_description') }}" placeholder="Product Description" required>

                    </div>

                    <div class="form-group">

                        <label for="other_product_details">Other Product Details</label>

                        <input type="text" class="form-control" id="other_product_details" name="other_product_details" value="{{ old('other_product_details') }}" placeholder="Other Product Details" required>

                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary text-center">Submit</button>
                    </div>


                </form>
                <br>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <br>
@endsection
{{--<td>{{ $product->product_type_code }}</td>--}}
{{--<td>{{ $product->return_merchandise_authorization_nr }}</td>--}}
{{--<td>{{ $product->product_name }}</td>--}}
{{--<td>{{ $product->product_price }}</td>--}}
{{--<td>{{ $product->product_color }}</td>--}}
{{--<td>{{ $product->product_size }}</td>--}}
{{--<td>{{ $product->product_description }}</td>--}}
{{--<td>{{ $product->other_product_details }}</td>--}}