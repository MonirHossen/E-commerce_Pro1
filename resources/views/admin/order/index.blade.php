@extends('layouts.admin.master')
@section('title','Order Page')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">List Of Orders</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="active">Order List</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @include('layouts.admin._message')
            <div class="panel panel-primary">
                <div class="panel-heading">
                        <div class="row">
                           <div class="col-md-6">
                               <h3 class="panel-title">All Orders</h3>
                           </div>
                            <div class="col-md-6">
                                <form action="">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <input type="text" value="{{ request()->search }}" class="form-control" name="search" placeholder="Search Orders">
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-warning">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Invoice Id</th>
                                        <th>Client</th>
                                        <th>Shipping Address</th>
                                        <th>Total Amount</th>
                                        <th>Payment Status</th>
                                        <th>Order Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $id=>$order)
                                        <tr>
                                            <td>{{$orders->firstItem() +$id }}</td>
                                            <td>{{ $order->invoice_id }}</td>
                                            <td>
                                                @if($order->client != null)
                                                    {{ $order->client->name }}
                                                    <br>
                                                    {{ $order->client->phone }}
                                                    <br>
                                                    {{ $order->client->email }}
                                                @endif
                                            </td>
                                            @if($order->client != null)
                                             <td>{{ $order->client->address }}</td>
                                            @endif
                                            <td>{{ $order->total_amount }}</td>
                                            <td>{{ $order->payment_status}}</td>
                                            <td>{{ $order->created_at}}</td>
                                            <td>{{ $order->status}}</td>
                                            <td>
                                                <a class="btn btn-warning btn-sm" href="{{route('product.edit',$order->id)}}"><i class="ti-pencil-alt"></i></a>
                                                <form class="d-inline-block" action="{{route('product.destroy',$order->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure Delete This Post?')"><i class="ti-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="text-center">{{ $orders->links() }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
