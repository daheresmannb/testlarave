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
                                <input type="text" placeholder="Direcci??n" id="direccion" class="form-control" name="direccion"
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
                                    <option value="">Regi??n</option>
                                    <option value="Regi??n de Arica y Parinacota">Regi??n de Arica y Parinacota</option>
                                    <option value="Regi??n de Tarapac??">Regi??n de Tarapac??</option>
                                    <option value="Regi??n de Antofagasta">Regi??n de Antofagasta</option>
                                    <option value="Regi??n de Atacama">Regi??n de Atacama</option>
                                    <option value="Regi??n de Coquimbo<">Regi??n de Coquimbo</option>
                                    <option value="Regi??n de Valpara??so">Regi??n de Valpara??so</option>
                                    <option value="Regi??n Metropolitana de Santiago">Regi??n Metropolitana de Santiago</option>
                                    <option value="Regi??n del Libertador General Bernardo O???Higgins">Regi??n del Libertador General Bernardo O???Higgins</option>
                                    <option value="Regi??n del Maule">Regi??n del Maule</option>
                                    <option value="Regi??n del ??uble">Regi??n del ??uble</option>
                                    <option value="Regi??n del Biob??o<">Regi??n del Biob??o</option>
                                    <option value="Regi??n de La Araucan??a">Regi??n de La Araucan??a</option>
                                    <option value="Regi??n de Los R??os<">Regi??n de Los R??os</option>
                                    <option value="Regi??n de Los Lagos">Regi??n de Los Lagos</option>
                                    <option value="Regi??n de Ays??n del General Carlos Ib????ez del Campo">Regi??n de Ays??n del General Carlos Ib????ez del Campo</option>
                                    <option value="Regi??n de Magallanes y la Ant??rtica Chilena">Regi??n de Magallanes y la Ant??rtica Chilena</option> </select>
                                @if ($errors->has('region'))
                                <span class="text-danger">{{ $errors->first('region') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" placeholder="Contrase??a" id="password" class="form-control"
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