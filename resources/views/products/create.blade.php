@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header"><h4>Dashboard</h4></div>
          <div class="card-body">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
              </div>
              <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" class="form-control" value="{{ old('price') }}">
              </div>
              <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control">
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ old('description') }}</textarea>
              </div>
              <div class="form-group">
                <button class="form-control btn btn-success">Save Product</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection