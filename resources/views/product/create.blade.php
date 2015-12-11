@extends('layouts.boxed')

@section('content')

<form action="" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="" class="">Name</label>
        <input type="text" class="form-control" name="name" value="{{ $product->name }}">
    </div>
    <div class="form-group">
        <label for="" class="">Purchase Price</label>
        <input type="text" class="form-control" name="purchase_price" value="{{ $product->purchase_price }}">
    </div>
    <div class="form-group">
        <label for="" class="">Sell Price</label>
        <input type="text" class="form-control" name="sell_price" value="{{ $product->sell_price }}">
    </div>
    <input type="submit" value="Save" class="btn btn-primary">
</form>

@stop
