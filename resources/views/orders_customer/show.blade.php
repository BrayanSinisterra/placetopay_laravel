@extends('template')
@section('content')

<div class="row">
    <div class="col-md-12">
        <h4 class="mb-3">Estado de compra</h4>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 text-center">
                            <h5 class="mb-3">Estado de la compra</h5>
                            <i class="bi bi-x-circle icono-x"></i>

                    </div>
                    <div class="col-md-12 text-center confir-block-descrip">

                        <h6 class="card-title"><b>Estado:</b> La petición ha sido aprobada exitosamente</h6>
                    </div>
                    <div class="col-md-12 text-center">
                        <h6 class="card-title"><b>Referencia:</b> 1122334455</h6>
                    </div>
                    <div class="col-md-12 text-center">
                        <h6 class="card-title"><b>Valor:</b> COP 2000</h6>
                    </div>
                    <div class="col-md-12 text-center">
                        <h6 class="card-title"><b>Fecha transacción:</b> 2021-11-30T15:49:47-05:00</h6>
                    </div>

                </div>

                <hr class="mb-4">
                <div class="row">
                    <div class="col-md-6">
                        <button class="btn btn-outline-primary btn-lg btn-block" type="button">Ver ordenes realizadas</button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-outline-success btn-lg btn-block" type="button">Volver a intentar la compra</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
