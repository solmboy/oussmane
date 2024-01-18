@extends('layouts.front')

@section('content')
<div class="d-flex mt-3 justify-content-center align-items-center mx-3  ">
    <div class="badge text-wrap p-3 m-3" ><h2 class="text-black fs-6">Total</h2> <div class=" border-info bg-info rounded-circle" style="width: 50px; height: 50px; margin:auto"><p class="text-black" style="font-size:24px; padding:10px">{{ $total }}</p></div></div>
</div>
<div class="container-fluid d-flex justify-content-center align-items-center">

        <div class="d-flex; mt-3; justify-content-center; align-items-center;   flex-wrap:wrap;">
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
 </div>
 <div class="container-card">
        <h3 style="text-align:center; background-color:#f55a2b; padding:20px; color:white;">LISTE DES CANDIDATURES</h3>
    <div class="container-card-liste">
    @foreach ($candidat as $candidats)
    <div class="container-liste">
        <div class="wrapper-liste">
            <div class="head-card-candi">
                <img src="/images/coach alpha.jpeg" alt="">
                <div class="nomprenom">
                    <h4><strong>Nom</strong> : {{ $candidats->nom }}</h4>
                    <h4><strong>Prenom</strong> : {{ $candidats->prenom }}</h4>
                </div>
        </div>
        <div class="head-personnelles">
            <div class="test">
                <p><strong>Email: </strong>{{ $candidats->email }}</p><br>
                <p><strong>Téléphone: </strong>{{ $candidats->telephone }}</p><br>
                <p><strong>Adresse: </strong>{{ $candidats->adresse }}</p><br>
                <p><strong>Domaine: </strong>{{ $candidats->domaine }}</p>
            </div>        
        </div>
        </div>
        <div class="button-wrapper-liste"> 
        <a href="{{route('edit-candidat',$candidats->id )}}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><a>
            <a onclick="return confirm('Souhaitez-vous le supprimer')" href="{{route('delete-candidat',$candidats->id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
            <a href="{{route('show.candidat',$candidats->id)}}" class="btn btn-secondary"><i class="fa fa-eye"></i></a>
        </div>
    </div>
    @endforeach
</div>
</div>
 
<style>

@import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');
           
             .container-card-liste{
                display:flex;
                /* flex-direction:column; */
                justify-content:center;
                flex-wrap:wrap;
                gap:10px;
             }
             .nomprenom{
                /* display: flex;
                flex-direction: column;
                justify-content: right; */
             }
            
             h4{
                font-size:15px;
             }
             .test{
                width:100%;
            }
            .test strong ,h4 strong{
             background-color:#f55a2b ;
            }
            .head-card-candi{
             display: flex;
             justify-content: center;
             align-items: center;
             gap: 10px;
             
            }
            .head-card-candi img{
            height: 100px;
            width: 50%;
            border-radius: 100%;
            border: 1px solid rgba(255,255,255, 0.255)
            }
            /* .banner-image-liste {
            background-image: url('/images/coach alpha.jpeg');
            background-image: url('/images/defarsci.jpg');
            background-position: center;
            background-size: cover;
            height: 100px;
            width: 50%;
            border-radius: 100%;
            border: 1px solid rgba(255,255,255, 0.255)
            } */
            .info-personnelles{
            display: flex;
            justify-content: left;
            flex-direction: column;
           }
        .container-liste {
        backdrop-filter: blur(16px) saturate(180%);
        -webkit-backdrop-filter: blur(16px) saturate(180%);
        background-color: rgba(17, 25, 40, 0.25);
        border-radius: 12px;
        border: 1px solid rgba(255, 255, 255, 0.125);  
        padding: 20px;  
        filter: drop-shadow(0 30px 10px rgba(0,0,0,0.125));
        width: 300px;
        display: flex;
        flex-direction: column;
        /* align-items: center;*/
        justify-content:left; 
    
        }

        .wrapper-liste {
        display: flex;
        justify-content: center;
        flex-direction: column;
        width: 100%;
        height: 100%;
        
        }

      

       

        .test p {
        color: #fff;
        font-family: 'Lato', sans-serif;
        text-align: left;
        font-size: 0.8rem;
        line-height: 150%;
        letter-spacing: 2px;
        text-transform: uppercase;
        display: flex;
        flex-wrap: wrap;
        }

        .button-wrapper-liste{
        margin-top: 18px;
        }

        .button-wrapper-liste .btn {
        border: none;
        padding: 12px 24px;
        border-radius: 24px;
        font-size: 12px;
        font-size: 0.8rem;  
        letter-spacing: 2px;  
        cursor: pointer;
        }

        .button-wrapper-liste .btn + .button-wrapper-liste .btn {
        margin-left: 10px;
        }

        .button-wrapper-liste .outline {
        background: transparent;
        color: rgba(0, 212, 255, 0.9);
        border: 1px solid rgba(0, 212, 255, 0.6);
        transition: all .3s ease;
        
        }

        .button-wrapper-liste .outline:hover{
        transform: scale(1.125);
        color: rgba(255, 255, 255, 0.9);
        border-color: rgba(255, 255, 255, 0.9);
        transition: all .3s ease;  
        }

        .button-wrapper-liste .fill {
        background: rgba(0, 212, 255, 0.9);
        color: rgba(255,255,255,0.95);
        filter: drop-shadow(0);
        font-weight: bold;
        transition: all .3s ease; 
        }

        .button-wrapper-liste .fill:hover{
        transform: scale(1.125);  
        border-color: rgba(255, 255, 255, 0.9);
        filter: drop-shadow(0 10px 5px rgba(0,0,0,0.125));
        transition: all .3s ease;    
        }











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
