<div class="form-gorup">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Nombre de la cateogoria']) !!}

    @error('name')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la cateogoria', 'readonly']) !!}

    @error('slug')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="my-5">
    <div class="row">
        <div class="col mx-auto">
                @isset ($category->image)
                    <img class="image" id="picture" src="{{Storage::url($category->image->url)}}">
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
                <p>Seleccione y suba una imagen que se usara para identificar la categoria. <br>
                    En caso de que no seleccione ninguna se mostrara una imagen por defecto
                </p>
        </div>
    </div>

</div>
