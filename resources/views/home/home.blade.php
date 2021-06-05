@extends('dashhome')

@section('content')
<style type="text/css">
	.container {
		padding-top: 2.5vh;
	}
    .blanco {
        color: white;
    }
</style>
<main class="login-form">
    <div class="container">
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
        <div class="row justify-content-center">
            <div class="card" style="width: 18rem;">
			  <div class="card-body">
			  	N° de enfermedades
			    <h1 class="card-title">{{ $n_enfermedades }}</h1>
			  </div>
			</div>

			<div class="card" style="width: 18rem;">
			  <div class="card-body">
			  	N° Tipos de enfermedades
			    <h1 class="card-title">{{ $n_tipo_enfermedades }}</h1>
			  </div>
			</div>
            <br>
        </div>
        <br><br>
        <div class="card border-dark mb-6" style="max-width: 38rem;">
            <div class="blanco card-header bg-dark border-dark">Ficha medica</div>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nombres</label>
                        <label class="form-control">{{ $usuario->nombres }}</label>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Apellidos</label>
                        <label class="form-control">{{ $usuario->apellidos }}</label>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputZip">Edad</label>
                        <label class="form-control">{{ $usuario->edad }}</label>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputCity">Sexo</label>
                        <label class="form-control">
                            @if($usuario->sexo == 0)
                                Masculino
                            @else
                                Femenino
                            @endif
                        </label>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputCity">Fecha Nacimiento</label>
                        <label class="form-control">{{ $usuario->fecha_nac }}</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Dirección</label>
                        <label class="form-control">{{ $usuario->direccion }}</label>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Comuna</label>
                        <label class="form-control">{{ $usuario->comuna }}</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputEmail4">Enfermedad</label>
                        <label class="form-control">
                            @if(count($usuario->enfermedades) > 0)
                                {{ $usuario->enfermedades->last()->nombre_enfermedad }}
                            @endif
                        </label>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputEmail4">Tipo</label>
                        <label class="form-control">
                            @if(count($usuario->enfermedades) > 0)
                                {{ $usuario->enfermedades->last()->claseenfermedad->nombre }}
                            @endif
                        </label>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputEmail4">Fecha Ingreso</label>
                        <label class="form-control">
                            @if(count($usuario->enfermedades) > 0)
                                {{ $usuario->enfermedades->last()->created_at }}
                            @endif
                        </label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Observación</label>
                        <label class="form-control">
                            @if(count($usuario->enfermedades) > 0)
                                {{ $usuario->enfermedades->last()->detalle }}
                            @endif
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection