@extends('admin.layouts.master')

@section('content')
      <!-- Main Content -->
        <section class="section">
          <div class="section-header">
            <h1>Product Variant Items</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('admin.dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{route('admin.products.index')}}">{{$variantItem->productVariant->product->name}}</a></div>
                <div class="breadcrumb-item"><a href="{{route('admin.products-variant.index', ['product' => $variantItem->productVariant->product->id])}}">Variants</a></div>
                <div class="breadcrumb-item"><a href="{{route('admin.products-variant-item.index', ['productId' => $variantItem->productVariant->product->id,'variantId' => $variantItem->productVariant->id])}}">{{$variantItem->productVariant->name}}</a></div>
                <div class="breadcrumb-item">{{$variantItem->name}}</div>
            </div>
          </div>

          <div class="section-body">

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit "{{$variantItem->name}}"</h4>

                  </div>
                  <div class="card-body">
                    <form action="{{route('admin.products-variant-item.update', $variantItem->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" class="form-control" name="variant_name" value="{{$variantItem->productVariant->product->name}}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Variant Name</label>
                            <input type="text" class="form-control" name="variant_name" value="{{$variantItem->productVariant->name}}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Item Name</label>
                            <input type="text" class="form-control" name="name" value="{{$variantItem->name}}">
                        </div>

                        <div class="form-group">
                            <label>Price <code>(Set 0 for make it free)</code></label>
                            <input type="text" class="form-control" name="price" value="{{$variantItem->price}}">
                        </div>

                        <div class="form-group">
                            <label for="inputState">Is Default</label>
                            <select id="inputState" class="form-control" name="is_default">
                                <option value="">Select</option>
                              <option {{$variantItem->is_default == 1 ? 'selected' : ''}} value="1">Yes</option>
                              <option {{$variantItem->is_default == 0 ? 'selected' : ''}} value="0">No</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="inputState">Status</label>
                            <select id="inputState" class="form-control" name="status">
                              <option {{$variantItem->status == 1 ? 'selected' : ''}} value="1">Active</option>
                              <option {{$variantItem->status == 0 ? 'selected' : ''}} value="0">Inactive</option>
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
