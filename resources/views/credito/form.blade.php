<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Trabajo') }}
            {{ Form::text('Trabajo', $credito->Trabajo, ['class' => 'form-control' . ($errors->has('Trabajo') ? ' is-invalid' : ''), 'placeholder' => 'Trabajo']) }}
            {!! $errors->first('Trabajo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cantidad') }}
            {{ Form::text('Cantidad', $credito->Cantidad, ['class' => 'form-control' . ($errors->has('Cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('Cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Interes') }}
            {{ Form::text('Interes', $credito->Interes, ['class' => 'form-control' . ($errors->has('Interes') ? ' is-invalid' : ''), 'placeholder' => 'Interes']) }}
            {!! $errors->first('Interes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Pagos') }}
            {{ Form::text('Pagos', $credito->Pagos, ['class' => 'form-control' . ($errors->has('Pagos') ? ' is-invalid' : ''), 'placeholder' => 'Pagos']) }}
            {!! $errors->first('Pagos', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>