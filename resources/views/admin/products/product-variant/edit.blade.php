@extends('admin.layouts.master')

@section('content')
      <!-- Main Content -->
        <section class="section">
          <div class="section-header">
            <h1>Product Variant</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('admin.dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{route('admin.products.index')}}">Products</a></div>
                <div class="breadcrumb-item"><a href="{{ url()->previous() }}">Variants</a></div>
                <div class="breadcrumb-item">{{$variant->name}}</div>
            </div>
          </div>

          <div class="section-body">

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit "{{$variant->name}}"</h4>

                  </div>
                  <div class="card-body">
                    <form action="{{route('admin.products-variant.update', $variant->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{$variant->name}}">
                        </div>
                        <div class="form-group">
                            <label for="inputState">Status</label>
                            <select id="inputState" class="form-control" name="status">
                              <option {{$variant->status == 1 ? 'selected' : ''}} value="1">Active</option>
                              <option {{$variant->status == 0 ? 'selected' : ''}} value="0">Inactive</option>
                            </select>
                        </div>
                        <button type="submmit" class="btn btn-primary">Update</button>
                        <a class="btn btn-danger" href="{{ url()->previous() }}">Cancel</a>
                    </form>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </section>

@endsection
