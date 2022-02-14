@extends('template')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 text-center">
                            <h5 class="mb-3">Lo sentimos ahora no podemos antender tú solicitud</h5>
                            <i class="bi bi-x-circle icono-x"></i>
                            <br><br><br>
                            <h5 class="mb-3">Puedes volver al <a href="{{url('/')}}">Inicio</a> </h5>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
