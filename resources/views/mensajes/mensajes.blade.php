@extends('dashhome')

@section('content')
<style type="text/css">
	.container {
		padding-top: 2.5vh;
	}
	#btns {
		padding-bottom: 2.5vh;
	}

	.blanco {
		color: white;
	}

</style>
@if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{ session()->get('message') }}</strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<main class="login-form">
    <div class="container">
    	<div class="card border-dark mb-6" style="max-width: 38rem;">
            <div class="blanco card-header bg-dark border-dark form-head">
                Mensajeria
            </div>
            <div class="card-body">
        		<div class="table-responsive">
					<table class="table">
						<thead class="table-dark">
							<tr>
						        <th>Id</th>
						        <th>Correo</th>
						        <th>Mensaje</th>
						    </tr>
						</thead>
						<tbody>


							@if(isset($mensajes))
								@foreach($mensajes as $mensaje)
									<tr>
								        <td>{{ $mensaje->id }}</td>
								        <td>{{ $mensaje->correo_contacto }}</td>
								        <td>{{ $mensaje->comentario }}</td>
								    </tr>
								@endforeach
							@endif
						</tbody>
					</table>
				</div>
			</div>
		</div>
    </div>
</main>
<div class="modal fade" id="modal_tipo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Tipo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        hola
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
	function Editar(id) {
		alert(id)
	}

	function Eliminar(id) {
		alert(id)
	}

	jQuery(document).ready(function($) { 
		$('#add_tipo').click(function () {
			$('#modal_tipo').modal('show');
		});


		
	});
</script>
@endsection