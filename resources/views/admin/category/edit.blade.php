@extends('layouts.admin.master')
@section('title','Edit Category')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">Edit Category</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="active">Edit Category</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><h3 class="panel-title">Edit Category Form</h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{ route('category.update',$category->id) }}" method="post"  role="form">
                        @csrf
                        @method('put')
                        @include('admin.category._form')
                        <button class="btn btn-success pull-right" type="submit">Update</button>
                    </form>
                </div> <!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col -->
    </div>
@endsection

