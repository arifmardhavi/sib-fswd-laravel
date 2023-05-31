@extends('admin.layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4">Create Product</h1>

            <div class="card mb-4">
                <div class="card-body">

                    <form action="{{ route('products.store')}}" method="POST">
                        @csrf
                        <div class="row g-3 align-items-center">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="ex: M Arif Mardhavi" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" class="form-control" id="price" name="price" placeholder="ex: 20000" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="sale_price" class="form-label">Sale Price</label>
                                <input type="text" class="form-control" id="sale_price" name="sale_price" placeholder="ex: 50000" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="category" class="form-label">Category</label>
                                <select name="category" class="form-select" id="category" aria-label="category">
                                    <option selected disabled>-- Choose Category --</option>
                                    @foreach ( $categories as $cat )
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="brand" class="form-label">Brand</label>
                                <select name="brand" class="form-select" id="brand" aria-label="brand">
                                    <option selected disabled>-- Choose Brand --</option>
                                    @foreach ($brands as $brand )
                                        <option value="{{ $brand->name }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>

                </div>
            </div>
        </div>
    </main>
@endsection
