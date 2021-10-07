@extends('adminlte::page')

@section('title', 'Categoria')

@section('content_header')
    <span>&nbsp;<i class="fas fa-home"></i>/&nbsp;Categorias/&nbsp;editar</span>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-header bg-secondary">
            <h4>Editar Categoria</h4>
        </div>
        <div class="card-body">
            {!! Form::model($category, ['route' => ['admin.categories.update', $category], 'autocomplete' => 'off', 'files' => true, 'method' => 'put']) !!}

                @include('admin.categories.partials.form')

                {!! Form::submit('Actualizar Categoria', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <style>
        .image{
            width: 300px;
            height: auto;
            border: 2px;
            border-radius: 10px 10px;
        }

        @media (min-width: 455px) {
            .image {
                width: 400px;
            }
        }

        @media (min-width: 1024px) {
            .image {
                width: 500px;
            }
        }

        @media (min-width: 1280px) {
            .image {
                width: 600px;
            }
        }
    </style>
    <style>
        .sidebar-dark-primary{
            background: #455279 !important;
        }
    </style>
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>

    <script>
            /* Cambiar Imagen */
        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        }
    </script>
@stop
