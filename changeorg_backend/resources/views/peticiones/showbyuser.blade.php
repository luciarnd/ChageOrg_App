@extends('layouts.public')
@section('content')
    <div class="container">
        <div class="row" id="cabecera">
            <div class="col-10">
                <h2>Mis peticiones</h2>
            </div>
            <div class="col-2 pe-0">
                <a href="{{url('peticion/create')}}">
                    <button class="btn" id="btnnaranja">Iniciar petición</button>
                </a>
            </div>
        </div>
        <div class="row" id="mis-peticiones">
            @foreach($peticionesuser as $peticion)
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-12 col-lg-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $peticion['titulo']?></h5>
                            <p class="card-text"><?php echo $peticion['descripcion']?><span><a href="/peticiones/<?php echo $peticion['id']?>">Leer más</a></span></p>
                            <p class="card-text"><small class="text-muted">Subido hace 4 horas</small></p>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <img src="{{asset('storage/'.$peticion['image'])}}" class="img-fluid" alt="a">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
