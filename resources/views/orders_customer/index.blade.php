@extends('template')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-10">
                <h4 class="mb-3">Ordenes</h4>
            </div>
            <div class="col-md-2">
                <a class="btn btn-outline-success btn-lg btn-block" href="{{route('order.create')}}">Crear orden</a>
            </div>
        </div>

        <table class="table confir-block-descrip">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre solicitante</th>
                    <th scope="col">Correo solicitante</th>
                    <th scope="col">Télefono solicitante</th>
                    <th scope="col">Referencia producto</th>
                    <th scope="col">Total</th>
                    <th scope="col">Fecha transacción</th>
                    <th scope="col">Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as  $order)
                    <tr>
                        <th scope="row">{{$order->id}}</th>
                        <th>{{$order->customer_name}}</th>
                        <th>{{$order->customer_email}}</th>
                        <th>{{$order->customer_mobile}}</th>
                        <td>{{$order->reference}}</td>
                        <td>${{number_format($order->total)}}</td>
                        <td>{{$order->created_at}}</td>
                        <td>{{$order->status}}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

@endsection
