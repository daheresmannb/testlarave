@extends('dashhome')

@section('content')
@if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{ session()->get('message') }}</strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<style type="text/css">
    .container {
        padding-top: 2.5vh;
    }

    .form-head {
        color: white;
    }
</style>
<main class="login-form">
    <div class="container">
        <div id="alertas"></div>
        <div class="card border-dark mb-6" style="max-width: 38rem;">
            <div class="blanco card-header bg-dark border-dark form-head">
                Datos enfermedad
            </div>
                <div class="card-body">
                    <form>
                        @csrf
                        <div class="form-group">
                            <input type="text" placeholder="Nombre enfermedad" id="nombre_enfermedad" class="form-control" name="nombre_enfermedad"
                                required autofocus>
                        </div>

                        <div class="form-group">
                            <select placeholder="Tipo de enfermedad" id="infermedad_clase_id" class="form-control" name="infermedad_clase_id"
                                required autofocus>
                                <option value="">Seleccione tipo</option>

                                @if(isset($tipos_enf))
                                    @foreach($tipos_enf as $tipo)
                                        <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="form-group">
                            <textarea placeholder="Ingrese observaciones" id="detalle" class="form-control" name="detalle"
                                required autofocus></textarea>
                        </div>
                    </form>
                    <div class="form-group">
                        <button type="button" onclick="LlenarFicha()" type="button" class="btn btn-primary">
                            Guardar Ficha
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script type="text/javascript">
    function LlenarFicha() {
        var data = {};
        var x = $("form").serializeArray();
        $.each(
            x, 
            function(i, field) {
                data[field.name] = field.value;
            }
        );
        data["usuario_id"] = "{{ Auth::user()->id }}";

        console.log(x);

        $.post( 
            "{{ route('enfermedad.create') }}", 
            data
        ).done(function( resp ) {
            console.log(data );

            if (resp.exito == true) {
                $("#alertas" ).append(
                    '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>'+resp.msg+'</strong></div>'
                );
            } else {
                $("#alertas" ).append(
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>'+resp.msg+'</strong></div>'
                );
            }
            setTimeout(function() { 
                $("#alertas").empty();
            }, 2500);
        });

        /*
        $.get(
            "ajax/test.html", 
            function(data) {
                $( ".result" ).html( data );
                alert( "Load was performed." );
            }
        );

        */
    }
</script>
@endsection