@extends('template')
@section('content')

<div class="row">

    <div class="col-md-12 order-md-1">
        <h4 class="mb-3">Formulario</h4>
        <form class="needs-validation" novalidate action="src/controller/PlacetopayController.php" method="post">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="firstName">Nombre</label>
                    <input type="text" class="form-control" name="customer_name" placeholder="Escribe tu nombre">
                    <div class="invalid-feedback">
                        Debes ingresar el Nombre
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="customer_email" placeholder="you@example.com" required>
                    <div class="invalid-feedback">
                        Debes ingresar el Email
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="email">Número de télefono</label>
                    <input type="number" class="form-control" name="customer_mobile" placeholder="00" required>
                    <div class="invalid-feedback">
                        Debes ingresar el Email
                    </div>
                </div>
            </div>

            <hr class="mb-4">
            <h4 class="mb-3">Pago</h4>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="reference">Referencia</label>
                    <input type="text" class="form-control" name="reference" placeholder="Escribe tu referencia" required>
                    <div class="invalid-feedback">
                        Este campo es requerido
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="description">Descrición del producto</label>
                    <input type="text" class="form-control" name="product_description" placeholder="" required>
                    <div class="invalid-feedback">
                        Este campo es requerido
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="currency">Moneda</label>
                    <input type="text" class="form-control" name="currency" placeholder="COP" maxlength="3" required>
                    <div class="invalid-feedback">
                        Este campo es requerido
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="total">Total</label>
                    <input type="number" class="form-control" name="total" placeholder="00" required>
                    <div class="invalid-feedback">
                        Este campo es requerido
                    </div>
                </div>
            </div>
            <hr class="mb-4">
            <div class="row">
                <div class="col-md-6">
                    <button class="btn btn-outline-primary btn-lg btn-block">Volver</button>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-outline-success btn-lg btn-block" type="submit">Generar orden</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
