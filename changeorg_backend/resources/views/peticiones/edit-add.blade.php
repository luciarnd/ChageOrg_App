@extends('layouts.public')
@section('content')
<div class="container mt-5" id="peticiones">
    <div class="row">
        <div class="col-12">
            <form action="/peticiones" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="destinatario">¿Para quién va tu petición?</label>
                    <textarea class="form-control" name="destinatario" placeholder="Introduce el destinatario o destinatarios a los que va dirigida esta petición" style="height: 100px"></textarea>
                </div>
                <div class="mb-3">
                    <label for="category">¿Cuál crees que es el tema que mejor define tu petición?</label>
                    <select class="form-select" aria-label="Elige un tema" id="category" name="category">
                        <option selected>Elige un tema</option>
                        @foreach($categorias as $categoria)
                        <option value="<?php echo $categoria['id']?>"><?php echo $categoria['name']?></option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título de tu petición</label>
                    <input type="text" class="form-control" id="titulo" name="titulo">
                </div>
                <div class="mb-3">
                    <label for="descripcion">Cuenta tu historia</label>
                    <textarea style="height: 200px;" name="descripcion" class="form-control" placeholder="Explica el problema y porqué te preocupa. Mostrando cómo esto te impacta a ti, tu familia o tu comunidad hará que más gente quiera firmarlo." id="descripcion"></textarea>
                </div>
                <div class="mb-3">
                    <label for="file" class="form-label">Sube una foto</label>
                    <input class="form-control" type="file" id="file" name="file">
                </div>
                <button type="submit" class="btn" id="btnnaranja-peticion">Enviar</button>
            </form>
        </div>
    </div>
</div>
@endsection
