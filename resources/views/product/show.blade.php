@extends('layouts.app')

@section('template_title')
    {{ $product->name ?? 'Show Product' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $product->name }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $product->price }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $product->amount }}
                        </div>
                        <div class="form-group">
                            <strong>Proveedor:</strong>
                            {{ $product->provider_name  }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

