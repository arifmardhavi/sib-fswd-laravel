@extends('admin.layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4">Create Product</h1>

            <div class="card mb-4">
                <div class="card-body">

                    <form action="{{ route('products.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3 align-items-center">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="name" name="name" placeholder="ex: M Arif Mardhavi" required>
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" value="{{ old('price') }}" name="price" placeholder="ex: 20000" required>
                                @error('price')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="sale_price" class="form-label">Sale Price</label>
                                <input type="text" class="form-control @error('sale_price') is-invalid @enderror" id="sale_price" value="{{ old('sale_price') }}" name="sale_price" placeholder="ex: 50000" required>
                                @error('sale_price')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="category" class="form-label">Category</label>
                                <select name="category" class="form-select @error('category') is-invalid @enderror" id="category" aria-label="category">
                                    <option selected disabled>-- Choose Category --</option>
                                    @foreach ( $categories as $cat )
                                        <option value="{{ $cat->id }}" {{ old('category') == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                                    @endforeach

                                </select>
                                @error('category')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="brand" class="form-label">Brand</label>
                                <select name="brand" class="form-select @error('brand') is-invalid @enderror" id="brand" aria-label="brand">
                                    <option selected disabled>-- Choose Brand --</option>
                                    @foreach ($brands as $brand )
                                        <option value="{{ $brand->name }}" {{ old('brand') == $brand->name ? 'selected' : '' }}>{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                                @error('brand')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Product Image</label>
                                <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="image" accept=".jpg, .jpeg, .png., .webp">
                                @error('image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
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
