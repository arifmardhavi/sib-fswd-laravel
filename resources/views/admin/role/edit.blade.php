@extends('admin.layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4">Edit Role</h1>

            <div class="card mb-4">
                <div class="card-body">

                    <form action="{{ route('role.update', $role->id )}}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $role->name }}" placeholder="write your category name here" required>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('role.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>

                </div>
            </div>
        </div>
    </main>
@endsection
