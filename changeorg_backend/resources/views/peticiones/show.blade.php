@section('content')
     @extends('layouts.public')
<div class="container">
    <div class="row" id="ficha">
        <div class="col-12">
            <h2><?php echo $peticion['titulo']?></h2>
        </div>
        <div class="col-8">
            <img src="{{asset('storage/'.$peticion['image'])}}">
        </div>
        <div class="col-4">
            <h5>Firma esta petición</h5>
            <label for="razon-firmar">Mi razón para firmar es...</label>
            <textarea class="form-control" placeholder="Razón para firmar" style="height: 200px;"></textarea>
            <a class="btn" id="btnnaranja" href="{{url('/peticiones/firmar/' . $peticion->id)}}">Firmar esta petición</a>
            <?php if (Auth::user()->role_id == 1) :?>
                <a class="btn btn-warning w-100 mt-3" href="{{url('/peticiones/cambiarestado/' . $peticion->id)}}">Cambiar estado</a>
            <?php endif;?>
        </div>
        <div class="col-8">
            <p><?php echo $peticion['descripcion']?></p>
        </div>

    </div>
</div>
@endsection
