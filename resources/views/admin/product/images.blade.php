@extends('layouts.admin.master')
@section('title','View all products')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">List Of Images</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('product.index') }}">List Of Product</a></li>
                    <li class="active">Images List</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">


    </div>
    <div class="row">
        <div class="col-md-12">
            @include('layouts.admin._message')
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <a href="{{ route('product.images.create',$product_id) }}" class="btn btn-dark pull-right">Add New Image</a>
                    <h3 class="panel-title">All Images</h3>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Images</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($images as $image)
                                        <tr>
                                            <td><img id="product_image" src="{{ asset($image->image) }}" alt="" width="20%"></td>
                                            <td>
                                                <form action="{{ route('product.image.update',$image->id) }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('put')
                                                    <input type="file" accept="imagme/*" onchange="document.getElementById('product_image').src = window.URL.createObjectURL(this.files[0])" name="image" class="form-control">
                                                    @error('image')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                    <br>
                                                    <button class="btn btn-info btn-sm" type="submit">Update</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form class="d-inline-block" action="{{ route('product.image.delete',$image->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure Delete This Image?')"><i class="ti-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="form-control">
                                    <a class="btn btn-info pull-right" href="{{ route('product.index') }}"><i class="ti-back-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
