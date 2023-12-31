@extends('admin.layouts.master')

@section('content')
      <!-- Main Content -->
        <section class="section">
          <div class="section-header">
            <h1>Product Image Gallery</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('admin.dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{route('admin.products.index')}}">Products</a></div>
                <div class="breadcrumb-item"><a href="{{route('admin.products-image-gallery.index', ['product' => $product->id])}}">{{$product->name}} Images</a></div>
                <div class="breadcrumb-item">Images</div>
            </div>
          </div>
         <div class="mb-3">
            <a href="{{route('admin.products.index')}}" class="btn btn-outline-danger px-3"><i class="fas fa-chevron-left"></i><span class="ml-3">Back</span></a>
         </div>
          <div class="section-body">
            <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h4>Product: {{$product->name}}</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.products-image-gallery.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Image <code>(Multiple image supported!)</code></label>
                                <input type="file" required name="image[]" class="form-control" multiple>
                                <input type="hidden" name="product" value="{{$product->id}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </form>
                    </div>

                  </div>
                </div>
              </div>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>All Images</h4>
                  </div>
                  <div class="card-body">
                    {{ $dataTable->table() }}
                  </div>

                </div>
              </div>
            </div>

          </div>
        </section>

@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
