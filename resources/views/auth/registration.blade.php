@extends('dashboard')

@section('content')

<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    @if(session()->has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <strong>{{ session()->get('message') }}</strong> 
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if(session()->has('message_e'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>{{ session()->get('message_e') }}</strong> 
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
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
                                <input type="number" maxlength="3" minlength="1" min="1" max="150" placeholder="Edad" id="edad" class="form-control"
                                    name="edad" required autofocus>
                                @if ($errors->has('edad'))
                                <span class="text-danger">{{ $errors->first('edad') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                            	<select name="sexo" class="form-control">
                            		<option value="">Ingrese opcion</option>
                            		<option value="0">Hombre</option>
                            		<option value="1">Femenino</option>
                            	</select>
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
                                <select placeholder="Region" id="region" class="form-control" name="region"
                                    required autofocus>
                                    <option value="">Región</option>
                                    <option value="Región de Arica y Parinacota">Región de Arica y Parinacota</option>
                                    <option value="Región de Tarapacá">Región de Tarapacá</option>
                                    <option value="Región de Antofagasta">Región de Antofagasta</option>
                                    <option value="Región de Atacama">Región de Atacama</option>
                                    <option value="Región de Coquimbo<">Región de Coquimbo</option>
                                    <option value="Región de Valparaíso">Región de Valparaíso</option>
                                    <option value="Región Metropolitana de Santiago">Región Metropolitana de Santiago</option>
                                    <option value="Región del Libertador General Bernardo O’Higgins">Región del Libertador General Bernardo O’Higgins</option>
                                    <option value="Región del Maule">Región del Maule</option>
                                    <option value="Región del Ñuble">Región del Ñuble</option>
                                    <option value="Región del Biobío<">Región del Biobío</option>
                                    <option value="Región de La Araucanía">Región de La Araucanía</option>
                                    <option value="Región de Los Ríos<">Región de Los Ríos</option>
                                    <option value="Región de Los Lagos">Región de Los Lagos</option>
                                    <option value="Región de Aysén del General Carlos Ibáñez del Campo">Región de Aysén del General Carlos Ibáñez del Campo</option>
                                    <option value="Región de Magallanes y la Antártica Chilena">Región de Magallanes y la Antártica Chilena</option> </select>
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