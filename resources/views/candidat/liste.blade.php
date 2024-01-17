@extends('layouts.front')

@section('content')
<div class="container-fluid">

        <div class="d-flex mt-3 justify-content-center align-items-center mx-3  ">
            <div class="badge text-wrap p-3 m-3" ><h2 class="text-black fs-6">Total</h2> <div class=" border-info bg-info rounded-circle" style="width: 50px; height: 50px; margin:auto"><p class="text-black" style="font-size:24px; padding:10px">{{ $total }}</p></div></div>
        </div>
        <div class="d-flex mt-3 justify-content-center align-items-center  whitespace-nowrap">
            <div class="badge text-wrap p-2 m-2 " ><h2 class="text-black fs-6">RH</h2> <div class=" border-info bg-info rounded-circle " style="width: 50px; height: 50px; margin:auto"><p class="text-black" style="font-size:24px; padding:10px">{{$rh}}</p></div></div>
            <div class="badge text-wrap p-2 m-2" ><h2 class="text-black fs-6">MD</h2> <div class=" border-info bg-info rounded-circle" style="width: 50px; height: 50px; margin:auto"><p class="text-black" style="font-size:24px; padding:10px">{{ $md }}</p></div></div>
            <div class="badge text-wrap p-2 m-2"><h2 class="text-black fs-6">GP</h2><div class=" border-info bg-info rounded-circle" style="width: 50px; height: 50px; margin:auto"><p class="text-black" style="font-size:24px; padding:10px">{{ $gp }}</p></div></div>
            <div class="badge text-wrap p-2 m-2"><h2 class="text-black fs-6">IB</h2> <div class="border-info bg-info rounded-circle" style="width: 50px; height: 50px; margin:auto"><p class="text-black" style="font-size:24px; padding:10px">{{ $ib }}</p></div></div>
            <div class="badge text-wrap p-2 m-2"><h2 class="text-black fs-6">DW</h2> <div class="border-info bg-info rounded-circle" style="width: 50px; height: 50px; margin:auto"><p class="text-black" style="font-size:24px; padding:10px">{{ $dw }}</p></div></div>
            <div class="badge text-wrap p-2 m-2"><h2 class="text-black fs-6">Ar</h2><div class="border-info bg-info rounded-circle" style="width: 50px; height: 50px; margin:auto"><p class="text-black" style="font-size:24px; padding:10px">{{ $ard }}</p></div></div>
            <div class="badge text-wrap p-2 m-2"><h2 class="text-black fs-6">M3 </h2><div class="border-info-info bg-info bg-info rounded-circle" style="width: 50px; height: 50px; margin:auto"><p class="text-black" style="font-size:24px; padding:10px">{{ $mi }}</p></div></div>
            <div class="badge text-wrap p-2 m-2"><h2 class="text-black fs-6">Mt </h2><div class="border-info bg-info rounded-circle" style="width: 50px; height: 50px; margin:auto"><p class="text-black" style="font-size:24px; padding:10px">{{ $maint }}</p></div></div>
            <div class="badge text-wrap p-2 m-2"><h2 class="text-black fs-6">DG</h2> <div class="border-info bg-info rounded-circle" style="width: 50px; height: 50px; margin:auto"><p class="text-black" style="font-size:24px; padding:10px">{{ $dg }}</p></div></div>
            <div class="badge text-wrap p-2 m-2"><h2 class="text-black fs-6">Au </h2><div class="border-info bg-info rounded-circle" style="width: 50px; height: 50px; margin:auto"><p class="text-black" style="font-size:24px; padding:10px">{{ $other }}</p></div></div>
        </div>
    <div class="card mt-5" >
        <div class="card-header bg-info text-black">Liste des Candidats</div>
        <div class="card-body">

            <table class="table" style="width: 100%;">
                <tr>
                    <th>#</th>
                    <th>Adresse Email</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Téléphone</th>
                    <th>Adresse Domicile</th>
                    <th>Domaine Competence</th>

                    <th>Actions</th>

                </tr>
                @foreach ($candidat as $candidats)
                    <tr >
                        <td>{{ $candidats->id }}</td>
                        <td>{{ $candidats->email }}</td>
                        <td>{{ $candidats->nom }}</td>
                        <td>{{ $candidats->prenom }}</td>
                        <td>{{ $candidats->telephone }}</td>
                        <td>{{ $candidats->adresse }}</td>
                        <td>{{ $candidats->domaine }}</td>
                        {{-- <td>{{ number_format($candidat->pourcentage, 2) }}%</td> --}}
                        {{-- {{ number_format(floatval($value ?? ''), 2, ',', ' ') }} --}}


                        <td>
                            <a href="{{route('edit-candidat',$candidats->id )}}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <a onclick="return confirm('Souhaitez-vous le supprimer')" href="{{route('delete-candidat',$candidats->id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            <a href="{{route('show.candidat',$candidats->id)}}" class="btn btn-secondary"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
<style>
    .badge{
        background-color:#f55a2b;
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


@endsection
