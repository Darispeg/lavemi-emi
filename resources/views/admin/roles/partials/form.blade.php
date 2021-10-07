<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del rol']) !!}

    @error('name')
        <small class="text-danger">
            {{$message}}
        </small>
    @enderror
</div>

<h2 class="h3">Lista de Permisos</h2>

<div class="container">
    <div class="row m-5">
        @foreach ($permissions as $permission)
            <label class="col-4">
                {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
                {{$permission->description}}
            </label>
        @endforeach
    </div>
</div>
