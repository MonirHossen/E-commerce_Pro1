@extends('layouts.front.master')
@section('title','Confirm Payment')
@section('content')
    <div class="row">
        <div id="content" class="col-md-12">
            <h2 class="title">Order Confirmation</h2>
            <a href="{{ $url }}" target="_blank" class="btn btn-info btn-lg">Make Payment</a>
        </div>
    </div>
@endsection
