<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('frontend/css/home/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/home/header.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/home/footer.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/home/todo3.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="{{asset('frontends/js/todo3.js')}}"></script>
</head>

<body>

    <header>
        <div class="hero-image">
            <div class="theme-switch-wrapper">
                <label class="theme-switch" for="checkbox">
                    <input type="checkbox" id="checkbox" />
                    <div class="slider round"></div>
                </label>
                <h6 style="margin: 0px 0px 0px 10px"> Enable Dark Mode! </h6>
            </div>
            <div class="hero-text">
                <h1 style="font-size:50px">MOUNTECH</h1>
            </div>
        </div>
    </header>

    <section>
        
        <nav class="nav1">
            <a href="http://127.0.0.1:8000/home">Home</a>
            <a href="http://127.0.0.1:8000/profile">Profile</a>
            <a href="http://127.0.0.1:8000/todo?">List App</a>
        </nav>

        <nav class="nav2">
            <div class="navbox">
                <ul class="myMenu">
                    <li><a href="#"><img src="{{asset('frontend/image/icon/Camera-01.png')}}" alt="Camera" width="25" height="25" style="margin-right: 5px; margin-bottom: 5px">Camera</a></li>
                    <li><a href="#"><img src="{{asset('frontend/image/icon/com-01.png')}}" alt="Computer" width="25" height="25" style="margin-right: 5px; margin-bottom: 5px">Computer</a></li>
                    <li><a href="#"><img src="{{asset('frontend/image/icon/Asset 1.png')}}" alt="Gadget" width="25" height="25" style="margin-right: 5px; margin-bottom: 5px">Gadget</a></li>
                    <li><a href="#"><img src="{{asset('frontend/image/icon/games-01.png')}}" alt="Games" width="25" height="25" style="margin-right: 5px; margin-bottom: 5px">Games</a></li>
                    <li><a href="#"><img src="{{asset('frontend/image/icon/internet-01.png')}}" alt="Internet" width="25" height="25" style="margin-right: 5px; margin-bottom: 5px">Internet</a></li>
                    <li><a href="#"><img src="{{asset('frontend/image/icon/mobile-01.png')}}" alt="Mobile" width="25" height="25" style="margin-right: 5px; margin-bottom: 5px">Mobile</a></li>
                </ul>
            </div>
        </nav>

        @yield('content')

        <nav class="nav3">

            <div class="navbox">
                <input type="text" class="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
                <br>
                <br>
                <p style="color : white"> Pouplar Post
                    <hr>
                <ul class="myMenu">
                    <li><a href="#"><b>BEST GAMES </b>
                            <br>
                            <br>10 Game online terbaik untuk kamu mainkan di tahun 2021 bersama teman
                        </a></li>
                    <li><a href="#"><b>SMARTPHONE 2021 </b>
                            <br>
                            <br>10 smartphone terbaik yang bisa jadi referensi buat kamu yang mencari smartphone baru di tahun 2021
                        </a></li>
                    <li><a href="#"><b>GADGET WAJIB MAHASISWA</b>
                            <br>
                            <br>10 Tech Gadget yang mahasiswa wajib punya ditahun 2021
                        </a></li>

            </div>

        </nav>

    </section>

    <div class="pagenumber">
        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
        </div>
    </div>

    <footer>
        <div>
            <a href="https://web.facebook.com/rz354" class="fa fa-facebook"></a>
            <a href="https://twitter.com/" class="fa fa-twitter"></a>
            <a href="https://www.instagram.com/hyrez_art/" class="fa fa-instagram"></a>
        </div>
        <div class="copyright">
            <p>&copy Copyright 2021 - Mountech
        </div>
    </footer>


    <script src="{{asset('frontend/js/main.js')}}"></script>
    
</body>

</html>