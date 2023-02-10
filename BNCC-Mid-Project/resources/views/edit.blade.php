<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Meksiko Management System</title>
    <!-- Google Fonts : Ubuntu -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="sidebar">

            <div class="bar-upper">

                <div class="upper-title">
                    <a href="/">
                        <img src="/images/maracas.png" alt="maracas icon">
                        <span>PT Meksiko</span>
                    </a>
                </div>

                <div class="logo">
                    <img src="/images/logo.png" alt="Logo">
                </div>

            </div>

            <div class="bar-lower">
                <div class="nav-list">
                    <a href="/" id="Dashboard">
                        <img src="images/dashboard_icon.png" alt="Dashboard Icon">
                        <span>Dashboard</span>
                    </a>
    
                    <a href="/view" id="View">
                        <img src="images/view_icon.png" alt="View Icon">
                        <span>View</span>
                    </a>
    
                    <a href="/add" id="Add">
                        <img src="images/add_icon.png" alt="Add icon">
                        <span>Add</span>
                    </a>
                </div>

            </div>

        </div>

        <div class="content">
            <div id="bar-button">
                <input type="checkbox" id="bar-checkbox">
                <label for="bar-checkbox" id="checkbox-label">
                    <div id="burger"></div>
                </label>
            </div>

            <div class="container col-md-6" style="padding-top: 20px">
                <div class="card shadow">
                <div class="card-header text-center"></div>
                <div class="card-body">
                    <form action="{{route('updateKaryawan', ['id' => $karyawan->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="mb-3">
                            <label for="Nama" class="form-label">Nama</label>
                            <input name="Nama" type="text" value="{{$karyawan->Nama}}" class="form-control" id="formGroupExampleInput" placeholder="Input Nama Lengkap Anda">
                            @error('Nama')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
        
                        <div class="mb-3">
                            <label for="Umur" class="form-label">Umur</label>
                            <input name="Umur" type="numeric" value="{{$karyawan->Umur}}" class="form-control" id="formGroupExampleInput" placeholder="Input Umur Anda">
                            @error('Umur')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Alamat" class="form-label">Alamat</label>
                            <input name="Alamat" type="text" value="{{$karyawan->Alamat}}" class="form-control" id="formGroupExampleInput" placeholder="Input Alamat Anda">
                            @error('Alamat')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="NomorTelp" class="form-label">Nomor Telepon</label>
                            <input name="NomorTelp" type="text" value="{{$karyawan->NomorTelp}}" class="form-control" id="formGroupExampleInput" placeholder="Input Nomor Telepon Anda">
                            @error('NomorTelp')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="card-body text-center">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>© 2023 PT. Meksiko</p>
    </footer>
    <script src="js/script.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script>
</html>