@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Brands</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{route('admin.dashboard')}}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{route('admin.brand.index')}}"> All Brands</a></div>
            <div class="breadcrumb-item">{{$brand->name}}</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit {{$brand->name}}</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.brand.update', $brand->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="banner">Preview</label>
                                <br>
                                <img width="200px" src="{{asset($brand->logo)}}" alt="">
                            </div>
                            <div class="form-group">
                                <label for="logo">Logo</label>
                                <input type="file" class="form-control" name="logo">
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" value="{{$brand->name}}" name="name">
                            </div>
                            <div class="form-group">
                                <label for="inputState">Is Featured?</label>
                                <select id="inputState" class="form-control" name="is_featured">
                                    <option value="">---- Select ----</option>
                                    <option {{$brand->is_featured == 1 ? 'selected' : ''}} value="1">Yes</option>
                                    <option {{$brand->is_featured == 0 ? 'selected' : ''}} value="0">No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputState">Status</label>
                                <select id="inputState" class="form-control" name="status">
                                    <option {{$brand->status == 1 ? 'selected' : ''}} value="1">Active</option>
                                    <option {{$brand->status == 0 ? 'selected' : ''}} value="0">Inactive</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <button type="button" class="btn btn-danger"><a style="text-decoration: none; color:white" href="{{route('admin.brand.index')}}">Cancel</a></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection