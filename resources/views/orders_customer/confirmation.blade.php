@extends('template')
@section('content')

<div class="row">
    <div class="col-md-12">
        <h4 class="mb-3">Confirmación de la compra</h4>
        <div class="card">
            <div class="card-body">
               <div class="row">
                   <div class="col-md-12">
                        <h5 class="mb-3">Datos personales</h5>
                   </div>
                   <div class="col-md-4">
                        <h6 class="card-title">Nombre</h6>
                        <h6 class="card-subtitle mb-2 text-muted">{{$order->customer_name}}</h6>
                   </div>
                   <div class="col-md-4">
                        <h6 class="card-title">Email</h6>
                        <h6 class="card-subtitle mb-2 text-muted">{{$order->customer_email}}</h6>
                   </div>
                   <div class="col-md-4">
                        <h6 class="card-title">Número de télefono</h6>
                        <h6 class="card-subtitle mb-2 text-muted">{{$order->customer_mobile}}</h6>
                   </div>
               </div>
               <hr class="mb-4">
               <div class="row">
                   <div class="col-md-12">
                        <h5 class="mb-3">Datos de la orden</h5>
                   </div>
                   <div class="col-md-4">
                        <h6 class="card-title">Referencia</h6>
                        <h6 class="card-subtitle mb-2 text-muted">{{$order->reference}}</h6>
                   </div>
                   <div class="col-md-4">
                        <h6 class="card-title">MONEDA</h6>
                        <h6 class="card-subtitle mb-2 text-muted">{{$order->currency}}</h6>
                   </div>

                   <div class="col-md-4">
                        <h6 class="card-title">TOTAL</h6>
                        <h6 class="card-subtitle mb-2 text-muted">${{number_format($order->total)}}</h6>
                   </div>
                   <div class="col-md-12 confir-block-descrip">
                        <h6 class="card-title">Descrición del producto</h6>
                        <h6 class="card-subtitle mb-2 text-muted">{{$order->product_description}}</h6>
                   </div>
                </div>
                <hr class="mb-4">
                <div class="row">
                    <div class="col-md-6">
                        <a class="btn btn-outline-primary btn-lg btn-block" href="{{route('order.index')}}">Cancelar</a>
                    </div>
                    <div class="col-md-6">
                        <a class="btn btn-outline-success btn-lg btn-block" href="{{url('placetopay',$order->id)}}">Realizar pago</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
