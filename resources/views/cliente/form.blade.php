<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $cliente->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo') }}
            {{ Form::text('Correo', $cliente->Correo, ['class' => 'form-control' . ($errors->has('Correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('Correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Teléfono') }}
            {{ Form::text('Teléfono', $cliente->Teléfono, ['class' => 'form-control' . ($errors->has('Teléfono') ? ' is-invalid' : ''), 'placeholder' => 'Teléfono']) }}
            {!! $errors->first('Teléfono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dirección') }}
            {{ Form::text('Dirección', $cliente->Dirección, ['class' => 'form-control' . ($errors->has('Dirección') ? ' is-invalid' : ''), 'placeholder' => 'Dirección']) }}
            {!! $errors->first('Dirección', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DUI') }}
            {{ Form::text('DUI', $cliente->DUI, ['class' => 'form-control' . ($errors->has('DUI') ? ' is-invalid' : ''), 'placeholder' => 'Dui']) }}
            {!! $errors->first('DUI', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Crédito') }}
            {{ Form::text('Crédito', $cliente->Crédito, ['class' => 'form-control' . ($errors->has('Crédito') ? ' is-invalid' : ''), 'placeholder' => 'Crédito']) }}
            {!! $errors->first('Crédito', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>