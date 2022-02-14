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
                            @if($order->status == 'FAILED' or $order->status == 'REJECTED')
                                <i class="bi bi-x-circle icono-x"></i>
                            @elseif($order->status == 'CREATED' or $order->status == 'PENDING')
                                <i class="bi bi-exclamation-circle icono-exclamation"></i>
                            @elseif($order->status == 'APPROVED')
                                <i class="bi bi-check-circle icono-check"></i>
                            @endif

                    </div>
                    <div class="col-md-12 text-center confir-block-descrip">

                        <h6 class="card-title"><b>Estado:</b> {{$order->message}}</h6>
                    </div>
                    <div class="col-md-12 text-center">
                        <h6 class="card-title"><b>Referencia:</b> {{$order->reference}}</h6>
                    </div>
                    <div class="col-md-12 text-center">
                        <h6 class="card-title"><b>Valor:</b> {{$order->currency}} ${{number_format($order->total)}}</h6>
                    </div>
                    <div class="col-md-12 text-center">
                        <h6 class="card-title"><b>Fecha transacción:</b> {{$order->created_at}}</h6>
                    </div>

                </div>

                <hr class="mb-4">
                <div class="row">
                    <div class="col-md-6">
                        <a class="btn btn-outline-primary btn-lg btn-block"  href="{{route('order.index')}}">Ver ordenes realizadas</a>
                    </div>
                    @if($order->status != 'APPROVED')
                        <div class="col-md-6">
                            <a class="btn btn-outline-success btn-lg btn-block" href="{{url('placetopay',$order->id)}}">Volver a intentar la compra</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
