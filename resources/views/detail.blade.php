<!DOCTYPE html>
<html>
<head>
    <title>detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>   
    <div class="container">
    <h2 class="mb-3 mt-3">Detail pengguna</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <a class='btn btn-warning' href="{{route('user.edit', '1')}}">Edit</a> 
        <a class='btn btn-danger' href="{{route('user.destroy', '1')}}">Hapus</a>        
        <div class="mb-3 mt-3">
            <img src="{{asset('avatar/Screenshot (395).png')}}" class='img-fluid mb-3 col-sm-5 d-block'>        
        </div>
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nama lengkap" value="arif" required disabled>
        </div>
        <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <input type="text" class="form-control" id="role" name="role" placeholder="role" required value="admin" disabled>
        </div>
        
        <div class="mb-3 row">
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value="20081010202@student.upnjatim.ac.id" disabled>
            </div>
            <div class="col-md-6">
            <div class="mb-3">
                <label for="phone" class="form-label">Telp</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="08199987262" value="4123123" disabled>
            </div>
            </div>
        </div>
        <div class="mb-3">
                <label for="address" class="form-label">Alamat lengkap</label>
                <textarea type="text" class="form-control" id="address" name="address" disabled>asdas</textarea>
        </div>
        <div class="mb-5"></div>
    </div>
    </form>
</body>
</html>
