<div class="my-5">
    <div class="row">
        <div class="col mx-auto">
                @isset ($parameter->image)
                    <img class="image" id="picture" src="{{Storage::url($parameter->image->url)}}">
                @else
                    <img class="image" id="picture" src="{{ URL::asset('../img/category-emi.jpg') }}">
                @endisset
        </div>
        <div class="col my-auto">
            <div class="form-group">
                {!! Form::label('file', 'Imagen que se mostrara en la Categoria') !!}
                {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
            </div>
            @error('file')
                <span class="text-danger">{{$message}}</span>
            @enderror
                <p>Seleccione y suba una imagen que se usara para identificar la autoridad. <br>
                    En caso de que no seleccione ninguna se mostrara una imagen por defecto.
                </p>
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('description', 'Descripcion',) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    @error('description')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
