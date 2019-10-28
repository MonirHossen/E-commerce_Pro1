@extends('layouts.admin.master')
@section('title','Edit Category')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">Edit Vendor</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="active">Edit Vendor</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><h3 class="panel-title">Edit Vendor Form</h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{ route('vendor.update',$vendor->id) }}" method="post"  role="form">
                        @csrf
                        @method('put')
                        @include('admin.vendor._form')
                        <a href="{{ route('vendor.index') }}" class="btn btn-dark ml-5">Back</a>
                        <button class="btn btn-info pull-right" type="submit">Update</button>
                    </form>
                </div> <!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col -->
    </div>
@endsection

