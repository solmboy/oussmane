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


    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
<section class="login">
    <form method="POST" action="{{ route('login') }}" class="col-md-4">
        @csrf
        <!-- Email Address -->
        
        <div class="card-header ">
            <h3 class="card-title title-up text-center">Connexion </h3>
            
                <img src="images/defarsci.png" alt="" class="mx-auto d-block">
                
      
            <br>
            <div class="social-line">
            <label for="email" :value="__('Email')"> 
               Email</i></label><br>
               <i class="now-ui-icons ui-1_email-85">
            <input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password" :value="__('Password')" >Password</label><br>

            <input id="password" class="block mt-1 w-full form-control"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4 text-center">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600 ">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4 ">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <button  class="btn ms-3  btn-primary  ml-auto">
                {{ __('Log in') }}
            </button>
        </div>
        </div>
    </form>
    
</section>
<style>
    .login{
        display:flex;
        justify-content:center;
        align-items:center;

    }
    button{
        background-color:#f55a2b;
    }

    .wally {
      background-image: url('chemin/vers/votre/image.jpg'); /* Remplacez par le chemin de votre image */
      background-size: cover;
      background-position: center;
      height: 100vh; /* 100% de la hauteur de la vue */
      margin: 0; /* Supprimer la marge par défaut du corps */
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* Ajoutez des styles personnalisés pour le contenu si nécessaire */
    .content {
      text-align: center;
      color: white;
    }
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

<style>

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
  </body>
</html>