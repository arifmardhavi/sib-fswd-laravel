@extends('admin.layouts.main')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="my-4">User</h1>
        <div class="card mb-4">
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Avatar</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $data as $user )
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <img src="https://dummyimage.com/100x100/dee2e6/6c757d.jpg" alt="avatar">
                                </td>
                                <td>
                                    {{ $user['name'] }}
                                </td>
                                <td>
                                    {{ $user['email'] }}
                                </td>
                                <td>
                                    {{ $user['phone'] }}
                                </td>
                                <td>
                                    {{ $user['role'] }}
                                </td>
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
