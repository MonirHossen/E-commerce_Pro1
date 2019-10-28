@extends('layouts.admin.master')
@section('title','View all vendor')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">List Of Vendors</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="active">Vendors List</li>
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
                    <h3 class="panel-title">All Vendor</h3>
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
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($vendors as $id=>$vendor)
                                            <tr>
                                                <td>{{ $id+1 }}</td>
                                                <td>{{ $vendor->name }}</td>
                                                <td>{{ $vendor->email }}</td>
                                                <td>{{ $vendor->address }}</td>
                                                <td>{{ strtoupper($vendor->status) }}</td>
                                                <td>
                                                    <a class="btn btn-warning btn-sm" href="{{route('vendor.edit',$vendor->id)}}"><i class="ti-pencil-alt"></i></a>
                                                    <form class="d-inline-block" action="{{route('vendor.destroy',$vendor->id)}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure Delete This Category?')"><i class="ti-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="text-center">{{ $vendors->render() }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
