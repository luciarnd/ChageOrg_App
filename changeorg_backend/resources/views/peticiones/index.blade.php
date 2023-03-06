@extends('layouts.public')
@section('content')
<div class="container" id="todas-peticiones">
    <div class="row">
        <div class="col-9">
            <h1><strong>Descubre peticiones para firmar</strong></h1>
        </div>
        <div class="col-3">
            <a class="btn w-100 mb-2" id="btnnaranja" href="{{url('/peticionesFirmadas')}}">Ver peticiones firmadas</a>
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
    <div class="col-12 p-0">
            <input type="button" class="btn btn-outline-secondary w-100 vermas" value="Ver más" >
    </div>

</div>

@endsection
