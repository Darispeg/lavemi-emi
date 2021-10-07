<div class="form-gorup">
    {!! Form::label('name', 'Grupo') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Nombre de la cateogoria', 'disabled']) !!}

    @error('name')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('description', 'Descripcion',) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    @error('description')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
