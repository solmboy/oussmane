@extends('layouts.front')
<br><br><br><br>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
<section class="login">
    <form method="POST" action="{{ route('login') }}" class="col-md-4">
        @csrf

        <!-- Email Address -->
     
      
       
        <div class="">
        <div class="card card-signup" background-color="orange">
        <div class="card-header ">
            <h3 class="card-title title-up text-center">Membre </h3>
            
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
</style>
<style>
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
  </style>