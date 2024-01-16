@extends('layouts.front')
<br><br><br><br><br><br>
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
