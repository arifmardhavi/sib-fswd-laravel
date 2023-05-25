@extends('admin.layouts.main')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="my-4">Products</h1>
        <div class="card mb-4">
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Category</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Sale Price</th>
                            <th>Brand</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $data as $products )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $products['categories']}}</td>
                                <td>{{ $products['name']}}</td>
                                <td>{{ $products['price']}}</td>
                                <td>{{ $products['sale_price']}}</td>
                                <td>{{ $products['brands']}}</td>
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
