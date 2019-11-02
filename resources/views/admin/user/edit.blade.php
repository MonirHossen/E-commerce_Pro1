@extends('layouts.admin.master')
@section('title','Create new user')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">Edit Admin</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="active">Edit Admin</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <a href="{{ route('user.create') }}" class="btn btn-info pull-right"><i class="ti-plus"></i>Add User</a>
                    <h3 class="panel-title">User Edit Form</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{ route('user.update',$user->id) }}" method="post" enctype="multipart/form-data" role="form">
                        @csrf
                        @method('put')
                        @include('admin.user._form')
                        <div class="form-control">
                            <a href="{{ route('user.index') }}" class="btn btn-info pull-right"><i class="ti-back-left"></i>Back</a>
                            <button  class="btn btn-info pull-right" type="submit">Update</button>
                        </div>
                    </form>
                </div> <!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col -->
    </div>
@endsection

