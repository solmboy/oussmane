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

</body>

</html>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Gestion des utilisateurs
        </h2>
    </x-slot>
    <div class="flex flex-col flex-1 ">
            
            <main class="flex-1 bg-gray-200">
                <div class="container px-6 mt-2 mx-auto" >
                    <div class="py-6">
                        <div class="max-w-7xl mx-auto">
                            <div class="bg-gray-400 overflow-hidden shadow-sm sm:rounded-lg border border-blue-700">
                                <div class="p-6" style="color: rgb(255, 119, 0); text-align:center;font-weight:800; font-size:30px; ">
                                

                <h3 class="text-3xl">Liste des utilisateurs</h3>
                
                <a href="{{ route('users.create')}}" class=" btn btn-primary bg-blue-500 text-black border border-blue-700 px-4 py-2 rounded">Ajouter</a>
                
            </div>
            <div class="flex flex-col mt-8">
                        <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                            <div class="inline-block min-w-full overflow-hidden align-middle border-b border-primary shadow sm:rounded-lg">
                                <table class="min-w-full mx-auto">
                                    <thead>
                                        <tr>
                                            <th
                                                class="px-6 py-3 text-sm font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-blue-700 bg-gray-50">
                                                Nom
                                            </th>
                                            
                                            <th
                                                class="px-6 py-3 text-sm font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-blue-700 bg-gray-50">
                                                Email
                                             </th>
                                             <th
                                                class="px-6 py-3 text-sm font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-blue-700 bg-gray-50">
                                                Role
                                             </th>
                                             <th
                                                class="px-6 py-3 text-sm font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-blue-700 bg-gray-50">
                                                Action
                                             </th>
                                             </tr>
                        </thead>

                        <tbody class="bg-white divide-y divide-primary">
                              @foreach($users as $user)
                                                        <tr class="border-b border-blue-700 p-3">
                                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-primary p-3 ">
                                                                <div class="flex items-center">
                                                                    
                                                                    <div class="ml-4">
                                                                        <div class="text-sm font-medium leading-5 text-gray-900">{{$user->name}}</div>
                                                                    </div>
                                                                
                                                            </td>
                                                            
                                                         
                                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-primary p-3">
                                                                <div class="text-sm leading-5 text-gray-900">{{$user->email}}</div>
                                                            </td>
                                                            
                                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-primary p-3">
                                        <div class="text-sm font-medium {{ $user->admin ? 'text-red-600' : 'text-green-600' }}">
                                            {{ $user->admin ? 'Administrateur' : 'Utilisateur' }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium d-flex items-center">
                                       <div>
                                       <a href="{{ route('users.edit', $user) }}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                                        <a href="{{ route('users.destroy', $user) }}" class="btn btn-danger" ><i class="fa fa-trash" aria-hidden="true"></i></a>
<td>
                            
                                       </div>
                                        <!-- <form action="{{ route('users.destroy', $user) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn p-2 text-white" style="background-color: orange; 
                                                                border-radius:5px; font-weight:600;" >Supprimer</button>
                                        </form> -->
                                    </td>
                                    </tr> 
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
                        
                    </div>
                </div>
            </main>
        </div>

        <!--   autre projet -->
<!-- 
 <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="padding:20px">
            <div class="flex items-center justify-between mb-4">
            <h3 class="text-3xl">Liste des utilisateurs</h3>
                
                <a href="{{ route('users.create')}}" class=" btn btn-primary bg-blue-500 text-black border border-blue-700 px-4 py-2 rounded">Ajouter</a>
                
            </div>
        
               <div class="overflow-x-auto py-6
                ">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-primary ">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nom
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Email
                                </th> 
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Rôle
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200"> 
                            @foreach($users as $user)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $user->name }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $user->email }}
                                        </div>
                                    </td> 
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium {{ $user->admin ? 'text-red-600' : 'text-green-600' }}">
                                            {{ $user->admin ? 'Administrateur' : 'Utilisateur' }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium flex items-center">
                                        <a href="{{ route('users.edit', $user) }}" class="text-indigo-600 hover:text-indigo-900 ">Modifier</a>
                                        <form action="{{ route('users.destroy', $user) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 ml-4 hover:text-red-900 " style="color:orange" >Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
 -->
