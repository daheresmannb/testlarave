@extends('dashhome')

@section('content')
<style type="text/css">
	.container {
		padding-top: 2.5vh;
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


        </div>
    </div>
</main>
@endsection