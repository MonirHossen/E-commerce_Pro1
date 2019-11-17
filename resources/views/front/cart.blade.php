@extends('layouts.front.master')
@section('title','Checkout page')

@section('custom-js')
    <script src="{{ asset('assets/front/js/cart.js') }}"></script>
@endsection

@section('content')
    <ul class="header-main ">
        <li class="home"><a href="#">Home   </a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
        <li> Shopping Cart</li>
    </ul>
    <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-12">
            <h2 class="title">Shopping Cart</h2>
            <div class="table-responsive form-group">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <td class="text-center">Image</td>
                        <td class="text-left">Product Name</td>
                        <td class="text-left">Model</td>
                        <td class="text-left">Quantity</td>
                        <td class="text-right">Unit Price</td>
                        <td class="text-right">Total</td>
                    </tr>
                    </thead>
                    <tbody class="cart-view">

                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-8">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td class="text-right">
                                <strong>Total:</strong>
                            </td>
                            <td class="text-right total-price">$0</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="buttons">
                <div class="pull-left"><a href="index.html" class="btn btn-primary">Continue Shopping</a></div>
                <div class="pull-right"><a href="#" class="btn btn-primary checkOutBtn" cus-url="{{ route('checkout.submit') }}">Checkout</a></div>
            </div>
        </div>
        <!--Middle Part End -->

    </div>
@endsection
