@extends('layouts.admin.master')
@section('title','Create new product')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">Create New Products</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="active">Create Product</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <a href="{{ route('product.index') }}" class="btn btn-info pull-right"><i class="ti-eye"></i>Product List</a>
                    <h3 class="panel-title">Product Form</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data" role="form">
                        @csrf
                        @include('admin.product._form')
                        <button class="btn btn-success pull-right" type="submit">Save</button>
                    </form>
                </div> <!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col -->
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
@endsection
