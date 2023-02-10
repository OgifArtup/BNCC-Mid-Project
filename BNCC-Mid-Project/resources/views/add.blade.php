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
    <link rel="stylesheet" href="/css/add.css">
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
            <div class="form">
                <h1>Add New Karyawan</h1>
                <form action="/create-karyawan" method="POST" enctype="multipart/form-data">@csrf
                    <div class="mb-3">
                        <label for="Nama">Nama Lengkap</label>
                        <input name="Nama" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Nama Lengkap Anda">
                            @error('Nama')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Umur">Umur</label>
                        <input name="Umur" type="numeric" class="form-control" id="formGroupExampleInput" placeholder="Input Umur Anda">
                        @error('Umur')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Alamat">Alamat</label>
                        <input name="Alamat" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Alaman Lengkap Anda">
                        @error('Alamat')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="NomorTelp">Nomor Telepon</label>
                        <input name="NomorTelp" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Nomor Telepon Anda">
                        @error('NomorTelp')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="insertBttn">Insert</button>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <p>© 2023 Alexandria Library</p>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>