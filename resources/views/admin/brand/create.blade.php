@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Brands</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{route('admin.dashboard')}}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{route('admin.brand.index')}}"> All Brands</a></div>
            <div class="breadcrumb-item">Create New</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Brand</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route(('admin.brand.store'))}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="logo">Logo</label>
                                <input type="file" class="form-control" name="logo">
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" value="{{old('name')}}" name="name">
                            </div>
                            <div class="form-group">
                                <label for="inputState">Is Featured?</label>
                                <select id="inputState" class="form-control" name="is_featured">
                                    <option value="">---- Select ----</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputState">Status</label>
                                <select id="inputState" class="form-control" name="status">
                                    <option selected value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                            <button type="button" class="btn btn-danger"><a style="text-decoration: none; color:white" href="{{route('admin.brand.index')}}">Cancel</a></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection