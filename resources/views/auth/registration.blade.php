@extends('dashboard')

@section('content')
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Registro de usuario</h3>
                    <div class="card-body">
                        <form action="{{ route('register.custom') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Nombres" id="nombres" class="form-control" name="nombres"
                                    required autofocus>
                                @if ($errors->has('nombres'))
                                <span class="text-danger">{{ $errors->first('nombres') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="Apellidos" id="apellidos" class="form-control" name="apellidos"
                                    required autofocus>
                                @if ($errors->has('apellidos'))
                                <span class="text-danger">{{ $errors->first('apellidos') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" maxlength="9" minlength="8" placeholder="Rut ej: 215606007" id="rut_address" class="form-control"
                                    name="rut" required autofocus>
                                @if ($errors->has('rut'))
                                <span class="text-danger">{{ $errors->first('rut') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="date" placeholder="Fecha Nacimiento" id="fecha_nac" class="form-control" name="fecha_nac"
                                    required autofocus>
                                @if ($errors->has('fecha_nac'))
                                <span class="text-danger">{{ $errors->first('fecha_nac') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email_address" class="form-control"
                                    name="email" autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="Dirección" id="direccion" class="form-control" name="direccion"
                                    required autofocus>
                                @if ($errors->has('direccion'))
                                <span class="text-danger">{{ $errors->first('direccion') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="Comuna" id="comuna" class="form-control" name="comuna"
                                    required autofocus>
                                @if ($errors->has('comuna'))
                                <span class="text-danger">{{ $errors->first('comuna') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="Region" id="region" class="form-control" name="region"
                                    required autofocus>
                                @if ($errors->has('region'))
                                <span class="text-danger">{{ $errors->first('region') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" placeholder="Contraseña" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> 	
                                    	Recuerdame
                                    </label>
                                </div>
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">	Registrar
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection