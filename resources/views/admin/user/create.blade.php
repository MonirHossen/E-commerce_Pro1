@extends('layouts.admin.master')
@section('title','Create new user')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">Create New Admin</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="active">Create Admin</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">User Import Form</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{ route('user.import') }}" method="post" enctype="multipart/form-data" role="form">
                        @csrf
                        <input type="file" name="import" class="form-control">
                        <br>
                        <button class="btn btn-success" type="submit">Import</button>
                    </form>
                </div> <!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col -->
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <a href="{{ route('user.index') }}" class="btn btn-info pull-right"><i class="ti-list"></i>User List</a>
                    <h3 class="panel-title">User Form</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{ route('user.store') }}" method="post" enctype="multipart/form-data" role="form">
                        @csrf
                        @include('admin.user._form')
                        <button class="btn btn-success pull-right" type="submit">Save</button>
                    </form>
                </div> <!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col -->
    </div>
@endsection
