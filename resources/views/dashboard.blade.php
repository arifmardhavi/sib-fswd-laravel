<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <a href="{{route('user.create')}}" class="btn btn-primary mt-3 mb-3">Tambah</a>
            <table class="table">
                <thead>
                    <tr class="table-primary">
                        <th scope="col">ID</th>
                        <th scope="col">Aksi</th>
                        <th scope="col">Avatar</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Role</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <a href="{{route('user.show', '1')}}" class="btn btn-primary" >Detail</a>
                            <a href="{{route('user.edit', '1')}}" class="btn btn-warning" >Edit</a>
                            <a href="{{route('user.destroy', '1')}}" class="btn btn-danger" >Hapus</a>
                        </td>
                        <td>
                            <img src="{{asset('avatar/Screenshot (395).png') }}" class="rounded-circle" alt="avatar" width="100em" >
                        </td>
                        <td>
                            Arif
                        </td>
                        <td>
                            arif@gmail.com
                        </td>
                        <td>
                            412412
                        </td>
                        <td>
                            Admin
                        </td>
                    </tr>
                </tbody>
                </table>
    </div>
</body>
</html>