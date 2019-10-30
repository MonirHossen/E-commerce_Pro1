@extends('layouts.admin.master')
@section('title','View all products')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">List Of Products</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="active">Products List</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    @include('layouts.admin._alert')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">All Products</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Unit Price</th>
                                        <th>Stock</th>
                                        <th>Images</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($products as $id=>$product)
                                            <tr>
                                                <td>{{ $id+1 }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->category->name }}</td>
                                                <td>{{ $product->unit_price }}</td>
                                                <td>{{ $product->stock }}</td>
                                                <td><img src="" width="20%" alt=""></td>
                                                <td>
                                                    <a class="btn btn-warning btn-sm" href="{{route('product.edit',$product->id)}}"><i class="ti-pencil-alt"></i></a>
                                                    <form class="d-inline-block" action="{{route('product.destroy',$product->id)}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure Delete This Post?')"><i class="ti-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="text-center">{{ $products->render() }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
