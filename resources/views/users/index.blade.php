<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="https://htmljstemplates.com/static_files/images/favicon.png" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css2/style.css') }}" rel="stylesheet">

<meta name="description" content="@yield('meta', 'Articles lunaires et articles heureux sur ce blog merveilleux')">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  @yield('scripts')
  <script src="{{ asset('js/app.js') }}" defer></script>
@yield('style')
<meta content="" name="description">

  <meta content="" name="keywords">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="icon" href="https://htmljstemplates.com/static_files/images/favicon.png"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="https://htmljstemplates.com/static_files/images/favicon.png" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="/assets/img/favicon.png" rel="icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@500&family=Lavishly+Yours&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/dd5559ee21.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <style>
       .containerlogo{
  margin-left:-50px;
  }
  .logo_defarsci{
    display:flex;
    flex-direction:row;
    align-items:center;
  }
  a {
    font-family: 'Darker Grotesque', sans-serif;
    font-size:20px;
    text-decoration: none;
  }
  .lavish {
    font-family: 'Lavishly Yours', cursive;
  }

  .customSubMenuHolder:hover > .customSubMenu{
    display:block
  }
  .customSubMenu {
    display:none;
    box-shadow: 2px 8px 12px rgba(0,0,0,0.5);
    position:absolute;
    width:100%;
    left:0;
    background:#00354b;
  }

  
  </style>

<title>@yield('title', 'Defarsci-candidature')</title>
  <meta name="description" content="Full width navbar with submenu tiles, designed with bootstrap 5">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

@yield('scripts')
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  @yield('style')
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom px-2">
    <div class="container-fluid">
      <div class="containerlogo">
        <a class="navbar-brand logo_defarsci" href="/" style="min-width:180px">
          <img style="height:64px" src="/images/defarsci.png" alt="">
          <span>DEFARSCI</span>
        </a>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class=" collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
            @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('liste.candidat') }}">Candidatures</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('liste.module') }}">Modules</a>
                </li>
                @if(Auth::user()->admin)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                @endif
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn deconnect ">Déconnecté</button>
                    </form>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Connecté</a>
                    
                </li>
            @endauth
        </ul>
      </div>
    </div>
  </nav>
  <main class="mt-5 pt-5">
        @yield('content')
    </main>

<div class="container">
    <div class="bg-gray-400 overflow-hidden shadow-sm sm:rounded-lg border border-blue-700">
    <div class="p-6" style="color: rgb(255, 119, 0); text-align:center;font-weight:800; font-size:30px; ">
    <h3 class="text-3xl">Liste des utilisateurs</h3>
    <a href="{{ route('users.create')}}" class=" btn btn-primary bg-blue-500 text-black border border-blue-700 px-4 py-2 rounded">Ajouter</a>
    </div><br>
    <ul class="responsive-table">
      <li class="table-header">
        <div class="col col-1">Nom</div>
        <div class="col col-1">Email</div>
        <div class="col col-1">Role</div>
        <div class="col col-1">Action</div>
      </li>
      @foreach($users as $user)
      <li class="table-row">
        <div class="col col-1" data-label="Nom">{{$user->name}}</div>
        <div class="col col-1 {{ $user->admin ? 'text-red' : 'text-green-600' }}" data-label="Email">{{$user->email}}</div>
        <div   data-label="Role">{{ $user->admin ? 'Administrateur' : 'Utilisateur' }}</div>
        <div class="col col-1 action">
            <a href="{{ route('users.edit', $user) }}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
            <a href="{{route('delete-user',$user->id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
        </div>
      </li>
      @endforeach
    </ul>
        @if(session('success'))
        <script>
        swal("Success","{{ Session::get('success')}}", 'success',{
            button:true,
            button:"Ok",
        });
        </script>
        @endif
  </div>
  </body>
</html>
<style>
      .action{
        display:flex;
        gap:10px;
      }
  body {
    font-family: 'lato', sans-serif;
  }
  .container {
    max-width: 1000px;
    margin-left: auto;
    margin-right: auto;
    padding-left: 10px;
    padding-right: 10px;
  }
  
  h2 {
    font-size: 26px;
    margin: 20px 0;
    text-align: center;
    small {
      font-size: 0.5em;
    }
  }
  
  .responsive-table {
    li {
      border-radius: 3px;
      padding: 25px 30px;
      display: flex;
      justify-content: space-between;
      margin-bottom: 25px;
    }
    .table-header {
      background-color: #95A5A6;
      font-size: 14px;
      text-transform: uppercase;
      letter-spacing: 0.03em;
    }
    .table-row {
      background-color: #ffffff;
      box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.1);
    }
    .col-1 {
      flex-basis: 10%;
    }
    .col-2 {
      flex-basis: 40%;
    }
    .col-3 {
      flex-basis: 25%;
    }
    .col-4 {
      flex-basis: 25%;
    }
    
    @media all and (max-width: 767px) {
      .table-header {
        display: none;
      }
 
      li {
        display: block;
      }
      .col {
        
        flex-basis: 100%;
        
      }
      .col {
        display: flex;
        padding: 10px 0;
        &:before {
          color: #6C7A89;
          padding-right: 10px;
          content: attr(data-label);
          flex-basis: 50%;
          text-align: right;
        }
      }
    }
  }
        .test{
            width:100%;
        }

        .deconnect{
        background-color:#f55a2b;

        }
        .navbar {
        padding: 0;
        }

        .navbar ul {
        margin: 0;
        padding: 0;
        display: flex;
        list-style: none;
        align-items: center;
        }

        .navbar li {
        position: relative;
        }

        .navbar a,
        .navbar a:focus {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 0 10px 30px;
        font-family: "Dosis", sans-serif;
        font-size: 15px;
        font-weight: 600;
        color: #0f394c;
        white-space: nowrap;
        transition: 0.3s;
        text-transform: uppercase;
        }

        .navbar a i,
        .navbar a:focus i {
        font-size: 12px;
        line-height: 0;
        margin-left: 5px;
        }

        .navbar a:hover,
        .navbar .active,
        .navbar .active:focus,
        .navbar li:hover>a {
        color: #49b5e7;
        }

        .navbar .dropdown ul {
        display: block;
        position: absolute;
        left: 14px;
        top: calc(100% + 30px);
        margin: 0;
        padding: 10px 0;
        z-index: 99;
        opacity: 0;
        visibility: hidden;
        background: #fff;
        box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
        transition: 0.3s;
        }

        .navbar .dropdown ul li {
        min-width: 200px;
        }

        .navbar .dropdown ul a {
        padding: 10px 20px;
        font-size: 15px;
        text-transform: none;
        font-weight: 500;
        }

        .navbar .dropdown ul a i {
        font-size: 12px;
        }

        .navbar .dropdown ul a:hover,
        .navbar .dropdown ul .active:hover,
        .navbar .dropdown ul li:hover>a {
        color: #49b5e7;
        }

        .navbar .dropdown:hover>ul {
        opacity: 1;
        top: 100%;
        visibility: visible;
        }

        .navbar .dropdown .dropdown ul {
        top: 0;
        left: calc(100% - 30px);
        visibility: hidden;
        }

        .navbar .dropdown .dropdown:hover>ul {
        opacity: 1;
        top: 0;
        left: 100%;
        visibility: visible;
        }

        @media (max-width: 1366px) {
        .navbar .dropdown .dropdown ul {
        left: -90%;
        }

        .navbar .dropdown .dropdown:hover>ul {
        left: -100%;
        }
        } 
</style>

    