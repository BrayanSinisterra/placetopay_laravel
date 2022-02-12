@extends('template')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-10">
                <h4 class="mb-3">Ordenes</h4>
            </div>
            <div class="col-md-2">
                <button class="btn btn-outline-success btn-lg btn-block" type="button">Crear orden</button>
            </div>
        </div>

        <table class="table confir-block-descrip">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Número de orden</th>
                    <th scope="col">Referencia del producto</th>
                    <th scope="col">Fecha de transacción</th>
                    <th scope="col">Estado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
