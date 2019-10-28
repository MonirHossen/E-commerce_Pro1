@extends('layouts.admin.master')
@section('title','View all category')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">List Of Categories</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="active">Categories List</li>
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
                    <h3 class="panel-title">All Category</h3>
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
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($categories as $id=>$category)
                                            <tr>
                                                <td>{{ $id+1 }}</td>
                                                <td>{{ $category->name }}</td>
                                                <td>{{ $category->description }}</td>
                                                <td>{{ $category->status }}</td>
                                                <td>
                                                    <a class="btn btn-warning btn-sm" href="{{route('category.edit',$category->id)}}"><i class="ti-pencil-alt"></i></a>
                                                    <form class="d-inline-block" action="{{route('category.destroy',$category->id)}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure Delete This Category?')"><i class="ti-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="text-center">{{ $categories->render() }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
