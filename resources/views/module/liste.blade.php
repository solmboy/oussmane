@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-12 margin-tb">
                <div class="float-start">
                    <h2>Modules</h2>
                </div>
                <div class="float-end">
                    <a class="btn btn-outline-success" href="{{ route('index') }}"> Ajouter un Module</a>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

         @if(session('success'))
          <script>
           swal("Success","{{ Session::get('success')}}", 'success',{
             button:true,
             button:"Ok",
           });
          </script>
          @endif

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Libelé</th>
                <th>Description</th>
                <th width="280px">Actions</th>
            </tr>
            @foreach ($module as $module)
            <tr>

                <td>{{ $module->id }}</td>
                <td>{{ $module->libele }}</td>
                <td>{{ $module->description }}</td>
                <td class="d-flex justify-content-end">
                    <form action="{{ route('delete-module',$module->id ) }}" method="POST"> 
                        <a href="{{route('edit-module',$module->id )}}" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <a onclick="return confirm('Souhaitez-vous le supprimer')" href="{{route('delete-module',$module->id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        @csrf
                        @method('DELETE')

                    </form>
                </td>
            </tr>
            @endforeach
        </table>
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
