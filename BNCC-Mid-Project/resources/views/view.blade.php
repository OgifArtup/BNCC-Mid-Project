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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

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
                    <div class="card-header text-center">{{ __('LIST KARYAWAN') }} </div>
                        <div class="card-body">
                            <div class="col-md-6" style="">
                                <form action="" method="GET" class="input-group row">
                                    <div class="input-group" style="">
                                        <input type="text" class="form-control" name="cari" placeholder="Search" value=""/>
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>
                            <br>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Umur</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Nomor Telepon</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($karyawans as $karyawan)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $karyawan->Nama }}</td>
                                        <td>{{ $karyawan->Umur }}</td>
                                        <td>{{ $karyawan->Alamat }}</td>
                                        <td>{{ $karyawan->NomorTelp }}</td>
                                        <td>
                                            <a href="/update-karyawan/{{ $karyawan->id }}"><button type="submit" class="btn btn-success col-md">Edit</button></a>
                                        </td>
                                        <td>
                                            <form action="{{route('delete', ['id' => $karyawan->id])}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button action="/delete-karyawan" type="submit" class="btn btn-danger col-md">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>© 2023 PT. Meksiko</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>