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
    <link rel="stylesheet" href="/css/index.css">
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
            <div class="part1">
                <img src="images/librarypic1.jpg" alt="Library Picture">
                <div class="imgtext"><h1>Alexandria Library<br>Serving People with Knowledge<br>Since Ptolemy II</h1></div>
            </div>
            
            <div class="part2">
                <div class="box">
                    <img src="images/books.png" alt="Stack of Books png">
                    <h2>We have around 700.000 books in total!<br>Fun Fact : We get them mostly through passing travelers in Alexandria!</h2>
                </div>
            </div>
            <div class="part3">
                <h1>History</h1>
                <p>(hover over the image!)</p>
                <div class="box">
                    <div class="showimg">
                        <div class="showtxt">
                            <h2>Started Building in 285 BC</h2>
                        </div>
                        <img src="images/build.png" alt="Image of Ancient Builders">
                    </div>
                    <div class="showimg">
                        <div class="showtxt">
                            <h2>Building Finished in 246 BC</h2>
                        </div>
                        <img src="images/librarypic2.png" alt="Image of Library">
                    </div>
                    <div class="showimg">
                        <div class="showtxt">
                            <h2>Collecting books from 246 BC till today..</h2>
                        </div>
                        <img src="images/collect_book.png" alt="Image of Book Collection">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>© 2023 Alexandria Library</p>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>