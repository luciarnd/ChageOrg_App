@extends('layouts.public')
@section('content')
    <div class="container" id="todas-peticiones">
        <div class="row">
            <div class="col-12">
                <h1><strong>Todas las peticiones firmadas</strong></h1>
            </div>
        </div>
        <?php foreach ($peticiones as $peticion) : ?>
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
        <?php endforeach;?>
    </div>

@endsection
