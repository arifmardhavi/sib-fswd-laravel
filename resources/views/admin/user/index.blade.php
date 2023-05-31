@extends('admin.layouts.main')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="my-4">User</h1>
        <a href="{{route('user.create')}}" class="btn btn-primary mb-2" >Create New</a>
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
                        @foreach ( $users as $user )
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <img src="https://dummyimage.com/100x100/dee2e6/6c757d.jpg" alt="avatar">
                                </td>
                                <td>
                                    {{ $user->name }}
                                </td>
                                <td>
                                    {{ $user->email }}
                                </td>
                                <td>
                                    {{ $user->phone }}
                                </td>
                                <td>
                                    {{ $user->role->name }}
                                </td>
                                <td>
                                    <form onsubmit="return confirm('Are you sure? ');" action="{{ route('user.destroy', $user->id) }}" method="POST">
                                        <a href="{{ route('user.edit', $user->id ) }}" class="btn btn-warning" >edit</a>

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
