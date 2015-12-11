@extends('layouts.boxed')

@section('content')

<a href="{{ url('product/create') }}" class="btn btn-primary">Create</a>
<br>
<br>
<div class="box">
    <div class="box-body">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Purchase Price</th>
                    <th>Sell Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($products as $i => $product)
                <tr>
                    <td><a href="{{ url('product/edit/' . $product->id) }}">{{ ++$i }}</a></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->purchase_price }}</td>
                    <td>{{ $product->sell_price }}</td>
                    <td><a href="{{ url('product/delete/' . $product->id) }}" class="btn btn-sm btn-danger">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop
