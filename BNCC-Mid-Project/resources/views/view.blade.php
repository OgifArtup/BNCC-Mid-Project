<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alexandria Library</title>
    <!-- Google Fonts : Ubuntu -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/view.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div id="bar-button">
                <input type="checkbox" id="bar-checkbox">
                <label for="bar-checkbox" id="checkbox-label">
                    <div id="burger"></div>
                </label>
            </div>
            <div class="bar-upper">

                <div class="upper-title">
                    <a href="/">
                        <span>Alexandria Library</span>
                    </a>
                </div>

                <div class="logo">
                    <img src="/images/logo.png" alt="Logo">
                </div>

            </div>

            <div class="bar-lower">
                <div class="nav-list">
                    <a href="/" id="Home">
                        <img src="images/home_icon.png" alt="Home Icon">
                        <span>Home</span>
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
                            <a href="/update-karyawan/{{ $karyawan->id }}"><button type="submit" class="editBttn">Edit</button></a>
                        </td>
                        <td>
                            <form action="{{route('delete', ['id' => $karyawan->id])}}" method="post">
                                @csrf
                                @method('delete')
                                <button action="/delete-karyawan" type="submit" class="deleteBttn">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <footer>
       <p>© 2023 Alexandria Library</p>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>