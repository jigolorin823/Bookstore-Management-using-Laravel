<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        
        #banner {
            background-image: url(imgs/books.jpg); 
            text-align: center;
            font-size: 100px;
            font-family: century gothic;
            text-align: center;
        }
        #title {
            background-color: red; 
            color: white;
            border-radius: 20px;
            padding-right: 10px;
            padding-left: 10px;
            text-decoration: none;
        }
        .topnav {
            overflow: hidden;
            background-color: #EF4323;
        }
        .topnav a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #E83311;
            color: black;
            text-decoration: none;
        }

        .topnav a.active {
            background-color: #4CAF50;
            color: #000000;
        }

        .topnav input[type=text] {
            float: right;
            padding: 6px;
            border: none;
            margin-top: 8px;
            margin-right: 16px;
            font-size: 17px;
        }
        .topnav .search-container button {
            float: right;
            padding: 6px 10px;
            margin-top: 8px;
            margin-right: 16px;
            background: #ddd;
            font-size: 17px;
            border: none;
            cursor: pointer;
        }

        .topnav .search-container button:hover {
            background: #ccc;
        }


        @media screen and (max-width: 600px) {
            .topnav a, .topnav input[type=text] {
                float: none;
                display: block;
                text-align: left;
                width: 100%;
                margin: 0;
                padding: 14px;
            }
            .topnav input[type=text] {
                border: 1px solid #ccc;
            }
        }

        footer {
            background-color: red;
            padding: 10px;
            text-align: center;
            color: white;
        }
    </style>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <header>
        <div class="container-fluid" style="background-color: #EF4323; padding-top: 10px; padding-bottom: 10px;">
            <div id="banner" class="jumbotron"><a href="#" id="title"><b>PULIBUKT</b></a></div>
            </div>
        </div>
    </header>
    <nav class="topnav">
        <ul style="list-style: none;">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                 By Genre
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Fiction</a>
                    <a class="dropdown-item" href="#">Non-fiction</a>
                    <a class="dropdown-item" href="#">Chuchu</a>
                </div>
                </li>
            <li><a href="#about">New Releases</a></li>
            <li>
                <div class="search-container">
                    <form>
                      <button type="submit"><i class="fa fa-search"></i></button>
                      <input type="text" placeholder="Search.." name="search" style="border-radius: 10px;">
                    </form>
                </div>
            </li>
            <li><a href="#" style="float: right;">Register</a></li>
            <li><a href="#" style="float: right;">Login</a></li>
            <li><a href="#" style="float: right;">View Cart</a></li>
        </ul>
    </nav>

    <div class="container">asdhagdjhasgdasdgah</div>
        <footer style="background-color: red;">
            <div class="footer-copyright text-center py-3">© 2018 Copyright:
                <a href="#" style="color: white;"> PULIBUKT</a>
            </div>
        </footer>
</body>
</html>