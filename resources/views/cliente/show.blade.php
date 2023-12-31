@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? "{{ __('Show') Cliente" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $cliente->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $cliente->Correo }}
                        </div>
                        <div class="form-group">
                            <strong>Teléfono:</strong>
                            {{ $cliente->Teléfono }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $cliente->Dirección }}
                        </div>
                        <div class="form-group">
                            <strong>Dui:</strong>
                            {{ $cliente->DUI }}
                        </div>
                        <div class="form-group">
                            <strong>Crédito:</strong>
                            {{ $cliente->Crédito }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
