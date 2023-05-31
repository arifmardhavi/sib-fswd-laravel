@extends('admin.layouts.main')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="my-4">Role</h1>
        <a href="{{ route('role.create') }}" class="btn btn-primary mb-2" >Create New</a>
        <div class="card mb-4">
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $data as $role )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $role->name }}</td>
                                <td>

                                    <form onsubmit="return confirm('Are you sure? ');" action="{{ route('role.destroy', $role->id) }}" method="POST">
                                        <a href="{{ route('role.edit', $role->id)}}" class="btn btn-warning" >edit</a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
