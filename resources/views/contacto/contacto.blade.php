@extends('dashboard')

@section('content')
<style type="text/css">
    .form-group {
        padding-bottom: 1vh;
    }
</style>
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    
    <div class="row">
        <div class="col-md-12">
            <div class="row justify-content-center">
                <form  method="post" class="row justify-content-center">
                    <fieldset class="row justify-content-center">
                        <legend class="text-center header">Contactenos</legend>
                        <div class="form-group text-center">
                            <div class="col-md-12">
                                <input type="email" id="email" name="email" type="text" placeholder="Correo de contacto" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea class="form-control" id="message" name="message" placeholder="Ingrese su comentario" rows="7"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row justify-content-right form-group">
                            <button type="submit" class="btn btn-primary btn-lg">   Enviar
                            </button> 
                        </div>
                    </fieldset>
                </form>
              
                    
        </div>
    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection