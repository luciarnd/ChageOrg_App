@extends('layouts.public')
@section('content')
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="{{asset("images/unlock.svg")}}"
                         class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form method="POST" action="{{route('register')}}">
                        @csrf
                        <div class="form-outline mb-4">
                            <label for="name">Nombre</label>
                            <input type="text" id="form1Example13" class="form-control form-control-lg" placeholder="Nombre" name="name"/>
                        </div>
                        <div class="form-outline mb-4">
                            <label for="email">Email</label>
                            <input type="email" id="form1Example13" class="form-control form-control-lg" placeholder="Email" name="email"/>
                        </div>
                        <div class="form-outline mb-4">
                            <label for="telefono">Telefono</label>
                            <input type="tel" id="form1Example13" class="form-control form-control-lg" placeholder="Telefono" name="telefono"/>
                        </div>
                        <div class="form-outline mb-4">
                            <label for="password">Contraseña</label>
                            <input type="password" id="form1Example23" class="form-control form-control-lg" placeholder="Contraseña" name="password"/>
                        </div>

                        <button type="submit" class="btn btn-lg btn-block w-100" id="btnnaranja">Registrarse</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
