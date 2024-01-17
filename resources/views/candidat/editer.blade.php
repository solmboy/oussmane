@extends('layouts.front')

@section('content')

<div class="conatiner">
  
    <div class="card">
        <div class="card-header bg-info text-white">Editer un candidat</div>
        <div class="card-body">
            <form action="{{route('update.candidat',$candidat->id)}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Adresse Email:</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{$candidat->email }}">
                </div>
                <div class="form-group">
                    <label for="">Nom:</label>
                    <input type="text" name="nom" id="" class="form-control" value="{{$candidat->nom }}">
                </div>

                <div class="form-group">
                    <label for="">Prenom:</label>
                    <input type="text" name="prenom" id="" class="form-control" value="{{$candidat->prenom }}">
                </div>

                <div class="form-group">
                    <label for="">Téléphone</label>
                    <input type="tel" name="telephone" id="" class="form-control" value="{{$candidat->telephone }}">
                </div>
                
                <div class="form-group">
                    <label for="">Adresse Domicile</label>
                    <input type="text" name="adresse" id="" class="form-control my-3" value="{{$candidat->adresse }}" requered>
                </div>

                <div class="form-group">
                        <label for="">Choisir votre domaine de compétence</label>
                        
                        <select name="domaine" id="" class="form-control my-3" value="{{$candidat->domaine }}">
                            {{-- foreach module --}}
                            <option value="Ressources Humaines">Ressources Humaines</option>
                            <option value="Marketing Digital">Marketing Digital</option>
                            <option value="Gestion Projet">Gestion Projet</option>
                            <option value="Informatique Bureautique">Informatique Bureautique</option>
                            <option value="Développement Web">Développement Web</option>
                            <option value="Ardino(Robotique-Internet des objets connectés)">Ardino(Robotique-Internet des objets connectés)</option>
                            <option value="Modélisation et Impression 3D">Modélisation et Impression 3D</option>
                            <option value="Maintenance">Maintenance</option>
                            <option value="Design Graphique">Design Graphique</option>
                            <option value="Autres">Autres</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Question/Suggestion/Commentaire</label>
                        <input type="text" name="question" id="" placeholder="Votre réponse" class="form-control my-3" value="{{$candidat->question}}" required>
                    </div>
                <div class="form-group">
                    <button class="btn btn-success mt-3">Modifier</button>
                </div>
            </form>
            
        </div>
    </div>
</div>
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
