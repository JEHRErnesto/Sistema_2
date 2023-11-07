@extends('layouts.app')

@section('template_title')
    {{ $credito->name ?? "{{ __('Show') Credito" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Credito</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('creditos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Trabajo:</strong>
                            {{ $credito->Trabajo }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $credito->Cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Interes:</strong>
                            {{ $credito->Interes }}
                        </div>
                        <div class="form-group">
                            <strong>Pagos:</strong>
                            {{ $credito->Pagos }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
