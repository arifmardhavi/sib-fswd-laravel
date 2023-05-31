@extends('admin.layouts.main')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="my-4">Categories</h1>
        <a href="{{ route('categories.create') }}" class="btn btn-primary mb-2" >Create New</a>
        <div class="card mb-4">
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $data as $categories )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $categories['name'] }}</td>
                                <td>
                                    <form onsubmit="return confirm('Are you sure? ');" action="{{ route('categories.destroy', $categories->id) }}" method="POST">
                                        <a href="{{route('categories.edit', $categories->id)}}" class="btn btn-warning" >edit</a>

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
