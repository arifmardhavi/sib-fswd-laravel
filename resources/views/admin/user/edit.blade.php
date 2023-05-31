@extends('admin.layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4">Edit User</h1>

            <div class="card mb-4">
                <div class="card-body">

                    <form action="{{ route('user.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row g-3 align-items-center">
                            <div class="mb-3 col-md-4">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" placeholder="ex: M Arif Mardhavi" required>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}" placeholder="ex: arifmardhavi@gmail.com" required>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" value="{{ $user->password }}" placeholder="*******" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}" placeholder="ex: 081234567890" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="role" class="form-label">Role</label>
                                <select name="role" class="form-select" id="role" aria-label="role">
                                    <option selected disabled>-- Choose Role --</option>
                                    @foreach ($roles as $role )
                                        <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('user.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>

                </div>
            </div>
        </div>
    </main>
@endsection
