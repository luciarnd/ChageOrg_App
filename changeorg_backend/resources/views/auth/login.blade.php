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
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="form-outline mb-4">
                        <label for="email">Email</label>
                        <input type="email" id="form1Example13" class="form-control form-control-lg" placeholder="Email" name="email"/>
                    </div>

                    <div class="form-outline mb-4">
                        <label for="password">Contraseña</label>
                        <input type="password" id="form1Example23" class="form-control form-control-lg" placeholder="Contraseña" name="password"/>
                    </div>

                    <div class="d-flex justify-content-around align-items-center mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                            <label class="form-check-label" for="form1Example3" > Recuerdame </label>
                        </div>
                        <a href="#!" style="color: orangered;">¿Olvidaste la contraseña?</a>
                    </div>

                    <button type="submit" class="btn btn-lg btn-block w-100" id="btnnaranja">Iniciar sesión</button>

                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                    </div>

                    <div class="col-12">
                        <a href="{{url('register')}}" id="btnnaranja" class="btn w-100">Registrate</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection


