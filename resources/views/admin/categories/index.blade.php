@extends('admin.layouts.main')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="my-4">Categories</h1>
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
                                    <a href="#" class="btn btn-warning" >edit</a>
                                    <a href="#" class="btn btn-danger"> delete</a>
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
