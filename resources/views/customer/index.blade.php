@extends('layouts.master')

@section('content')
<h1>Customers <a href="{{route('customer.create')}}" class="btn btn-primary">Add New Customer</a> </h1>
<div class="table">
    <table class="table table-bordered table-striped table-hover ">
        <thead>
        <tr>
            <th>S.N.</th>
            <th>Name</th>

        </tr>
        </thead>
        <tbody>
            @foreach($customers as $key=>$customer)
                <tr>
                    <td>{{ $key + 1 }}</td>

            <td><a href="{{ route('customer.show',['id'=>$customer->customer_id]) }}">{{ $customer->organization_or_person }}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection