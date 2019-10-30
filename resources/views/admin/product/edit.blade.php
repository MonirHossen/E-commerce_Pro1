@extends('layouts.admin.master')
@section('title','Edit product')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">Edit Product</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="active">Edit Product</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><h3 class="panel-title">Product Edit Form </h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{ route('product.update',$product->id) }}" method="post" enctype="multipart/form-data" role="form">
                        @csrf
                        @method('put')
                        @include('admin.product._form')
                        <button class="btn btn-success pull-right" type="submit">Update</button>
                    </form>
                </div> <!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col -->
    </div>
@endsection

