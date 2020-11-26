<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    <script src="{{ asset ('jquery/jquery-3.5.1.min.js')}}"></script>
    <link rel="stylesheet" href="{{ asset ('bootstrap/css/bootstrap.min.css')}}">
    <script src="{{ asset ('bootstrap/js/bootstrap.min.js')}}"></script>
    

    <style>
        body{
           
            font-family: 'Georgia';
        }
        .navbar{
            background-color:#FF1493;
            display: flex;
            justify-content: space-around;
        }

       .FS{
           display: block;
           margin: 0 0 5px;

        }
        .navbar-nav{
            display: flex;
            flex-direction: row;
        }
        .kembali{
            margin-right: 5px;
        }
        .kembali>a{
            color:#000000;
            text-decoration: none;
            display: flex;
            justify-content: left;
        }
        .kembali:hover{
            cursor: pointer;
            background-color: aquamarine;
            color: black;
            display: flex;
            justify-content: left;
        }

        .semuamovies{
            display: flex;
            justify-content: left;
        }

        .semuamovies:hover{
            cursor: pointer;
            background-color: green;
            color: white;
            display: flex;
            justify-content: left;
        }
       
        .btn{
            color: #000000;
            
        }
        .btn1{
            color: #000000;
            display: flex;
            justify-content: left;
        }
    </style>
    @yield('style')
</head>

<body>
    <nav class="navbar">
        <h1 class="FS" style="font-size: 16px">Flowelto Shop</h1>
        <ul class="navbar-nav">
            <li>
                <div class="kembali">
                    <a href="javascript:history.back()">
                    <span>
                        <span style="font-size: 14px">
                            &#11013;
                        </span>KEMBALI</span>
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
            <li>
                <div class="semuamovies ml-0">
                    <span><a href="/" class="btn1">LIHAT SEMUA FILM</a></span>
                </div>
            </li>
        </ul>
    </nav>
    @yield('containers')
</body>
</html>


