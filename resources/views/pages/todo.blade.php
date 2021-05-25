<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Minimal To-do List And Task Manager App</title>

  <!-- CSS -->
  <link rel="stylesheet" href="{{asset('frontend/css/home/todo3.css')}}" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="{{asset('frontend/js/todo3.js')}}"></script>
  <link rel="stylesheet" href="{{asset('frontend/css/home/style.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/home/header.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/home/footer.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/profile/profile.css')}}">


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
    <nav class="nav1">
      <a href="http://127.0.0.1:8000/home">Home</a>
      <a href="http://127.0.0.1:8000/profile">Profile</a>
      <a href="http://127.0.0.1:8000/todo?">List App</ </nav>
  </header>

  <div class="box">

    <div class="container">
      <h1>To-do List</h1>

      <form class="add-items">

        <input type="text" class="form-control" id="todo-list-item" placeholder="What do you need to do ?" maxlength="20" autocomplete="off" />

        <button class="add" type="submit">Add</button>
      </form>


      <ul id="list-items"></ul>

      <div>
        <h1 class="jarak">.</h1>
        <hr>
        <div style="float: left; width: 15%; font-size: 20px; margin-top: 35px; ">Kamu memiliki : </div>
        <div style="float: left; width: 2%; font-size: 20px; margin-top: 35px; " class="list-count"> 0 </div>
        <div style="float: left; width: 2%; font-size: 20px; margin-top: 35px; ">Kegiatan</div>
      </div>

      <button class="clear" style="float: right; margin-top: 25px; ">Clear List</button>

    </div>


  </div>

  <footer>
    <div class="copyright">
      <p>&copy Copyright 2021 - Mountech
    </div>
  </footer>

  </div>

  <script src="{{asset('frontend/js/main.js')}}"></script>
</body>

</html>