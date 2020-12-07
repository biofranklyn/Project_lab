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
           margin: 0 0 10px;

        }
        a>.FS{
            color:#000000;
            text-decoration: none;
        }
        a{
            text-decoration: none;
        }
        .navbar-nav{
            display: flex;
            flex-direction: row;
        }
        .flowelto{
            color: #000000;
        }
        .flowelto>a{
            color: #000000;
            text-decoration: none;
        }
        .flowelto:hover{
            color: #000000;
            cursor: pointer;
        }
        .login{
            margin-right: 20px;
            margin-top: 8px;
        }
        .login>a{
            color:#000000;
            text-decoration: none;
            display: flex;
            justify-content: left;
        }
        .login:hover{
            cursor: pointer;
            background-color: aqua;
            color: black;
            display: flex;
            justify-content: left;
        }

        .register{
            color:#000000;
            margin-top: 8px;
            margin-right: 10px;
        }

        .register>a{
            color:#000000;
            text-decoration: none;
        }

        .register:hover{
            cursor: pointer;
            background-color: aqua;
            color: rgb(0, 0, 0);

        }   
        .dropdown{
            margin-right: 20px;
        }

        .dropdown>a{
            color:#000000;
            text-decoration: none;
        }
        .dropdown:hover{
            cursor: pointer;
            background-color: aqua;
            color: rgb(0, 0, 0);

        }  
        .date{
            margin-top: 8px;
            color: #000000
        }
    </style>
    @yield('style')
</head>

<body>
    <nav class="navbar" id="navigasi" >
        <div class="flowelto">
            <a href="/">
            <h1 class="FS" style="font-size: 16px">Flowelto Shop</h1>
            </a>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item dropdown"> 
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Categories
                </a>
                <div class="dropdown-menu" style="position: absolute;" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Blossom box</a>
                  <a class="dropdown-item" href="#">Bouquet</a>
                  <a class="dropdown-item" href="#">Fresh flower</a>
                  <a class="dropdown-item" href="#">Vase</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Home</a>
                </div>
            </li> 
            <li>
                <div class="login">
                    <a href="/login">
                    <span>
                        <span style="font-size: 14px">   
                        </span>Login</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="register ml-0">
                    <span><a href="/register" class="register">Register</a></span>
                </div>
            </li>
            <li>
                <div class="date ml-0">
                    <span>Buat tanggal</span>
                </div>
            </li>
        </ul>
    </nav>
    @yield('containers')
</body>
</html>


