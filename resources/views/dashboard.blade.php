@extends('layouts.front')
<br><br><br><br><br>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 px-4 " >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"style="background-color:#f55a2b; padding: 10px;">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h3 class="text-3xl mx-4 my-4">Les actions possibles</h3>
                <div class="p-6 bg-white  text-center d-flex justify-content-center align-items-center mt-3 mb-4 ml-2 mr-5">
                <div class="quick_activity_wrap ">
    <div class="single_quick_activity d-flex">
    <div class="icon">
   
    <div class="count_content">
                <a href="{{ route('users') }}" class="inline-flex items-center px-6 py-4 border border-3 border-primary-400 p-3 shadow-sm text-base font-medium rounded-md text-gray-700 bg-white d-flex justify-content-center align-items-center ">
                <i class="bi bi-person">   Gestion des utilisateurs</i>
    
             
                    </a>
    </div>
    </div>
    <div class="single_quick_activity d-flex ad-flex justify-content-center align-items-center">
    <div class="icon">
   
  
               <div class="count_content">        
                    <a href="{{ route('liste.candidat') }}" class="inline-flex items-center px-6 py-4 border border-3 border-primary-400 p-3 shadow-sm text-base font-medium rounded-md text-gray-700 bg-white">
                    <i class="bi bi-person-arms-up">Gestion des candidature</i>  
                    </a>
                    </div>
                    </div>

                    <div class="single_quick_activity d-flex " >
                   <div class="icon">
                    <a href="{{ route('liste.module') }}" class="inline-flex items-center px-6 py-4 border border-3 border-primary-400 p-3 shadow-sm text-base font-medium rounded-md text-gray-700 bg-white" >
                    <i class="bi bi-wallet2">Gestion des modules</i>  
                    </a>
                    </div>
                    </div>
                    </div>
                    </div>
                    <!--  -->
                </div>
            </div>
        </div>
    </div>

