@extends('dashhome')

@section('content')
<style type="text/css">
	.container {
		padding-top: 2.5vh;
	}
	#btns {
		padding-bottom: 2.5vh;
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
    	<div class="row justify-content-left" id="btns">
    		<button type="button" id="add_tipo" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_tipo">
				Agregar tipo
			</button>
    	</div>
        <div class="row justify-content-left">       	
        	<div class="card" id="tabla_tipos">
        		<div class="table-responsive">
					<table class="table">
						<thead class="table-dark">
							<tr>
						        <th>Id</th>
						        <th>Tipo Enfermedad</th>
						        <th>Acciones</th>
						    </tr>
						</thead>
						<tbody>
							@if(isset($tipos_enf))
								@foreach($tipos_enf as $tipo)
									<tr>
								        <td>{{ $tipo->id }}</td>
								        <td>{{ $tipo->nombre }}</td>
								        <td>
								        	<button onclick="Editar('{{ $tipo->id }}')" type="button" class="btn btn-info">Editar</button><br>
								        	<button type="button" class="btn btn-danger">Eliminar</button>
								        </td>
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
        ...
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