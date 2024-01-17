@extends('layouts.front')

@section('content')

<div class="container">

    @if (session('success'))
    <div class="alert alert-info mt-5 text-center" style="max-width: 18rem; margin: auto;">
        {{ session('success') }}
    </div>
    @endif

    <img src="images/def.JPG" alt="Defarsci" class="img-fluid mt-3 rounded" style="object-fit: cover;">
    <div class="card my-3 mx-auto" style="max-width: 50rem;">

    <h2 class="card-header bg-info text-black fs-5 fw-bold text-center w-75">
        FORMATION DE STAGE 100% PRATIQUE
    </h2>
        <div class="card-body">
            <form action="{{ route('store.candidat') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Adresse Email:</label>
                    <input type="email" name="email" id="email" placeholder="Votre réponse" class="form-control">
                </div>

                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="nom" class="form-label">Nom:</label>
                        <input type="text" name="nom" id="nom" placeholder="Votre réponse" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label for="prenom" class="form-label">Prénom:</label>
                        <input type="text" name="prenom" id="prenom" placeholder="Votre réponse" class="form-control">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="telephone" class="form-label">Téléphone</label>
                    <input type="tel" name="telephone" id="telephone" placeholder="Votre réponse" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="adresse" class="form-label">Adresse Domicile</label>
                    <input type="text" name="adresse" id="adresse" placeholder="Votre réponse" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="domaine" class="form-label">Choisir votre domaine de compétence</label>
                    <select name="domaine" id="domaine" class="form-control">
                        @foreach ($module as $modules)
                            <option value="{{ $modules->libele }}">{{ $modules->libele }}</option>
                        @endforeach
                        <!-- Autres options ici -->
                    </select>
                </div>

                <div class="mb-3">
                    <label for="myfile" class="form-label">Télécharger votre CV:</label>
                    <input type="file" id="myfile" name="myfile" accept="application/pdf" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="question" class="form-label">Question/Suggestion/Commentaire</label>
                    <textarea name="question" id="question" cols="30" rows="10" placeholder="Votre réponse" class="form-control"></textarea>
                </div>

                <div class="text-center">
                    <button class="btn btn-info">Envoyer</button>
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
