@extends('layouts.admin.master')
@section('title','Create new product image')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-header-title">
            <h4 class="pull-left page-title">Create new products images</h4>
            <ol class="breadcrumb pull-right">
                <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
{{--                <li><a href="{{ route('product.images') }}">List of products images</a></li>--}}
                <li class="active">Create Product</li>
            </ol>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-primary">
            <div class="panel-heading"><h3 class="panel-title">Product Form</h3></div>
            <div class="panel-body">
                <form class="form-horizontal" action="{{ route('product.images.store',$product_id) }}" method="post" enctype="multipart/form-data" role="form">
                    @csrf
                    <div class="form-group">
                        <input type="file" accept="image/*" multiple name="image[]" class="form-control">
                    </div>

                    <button class="btn btn-success " type="submit">Save</button>
                </form>
            </div> <!-- panel-body -->
        </div> <!-- panel -->
    </div> <!-- col -->
</div>
@endsection

