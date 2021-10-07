@extends('adminlte::page')

@section('title', 'Blog-Laravel')

@section('content_header')
<span>&nbsp;<i class="fas fa-home"></i>/&nbsp;Posts/&nbsp;editar</span>

@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-header bg-secondary">
            <h4>Editar Post</h4>
        </div>
        <div class="card-body">
            {!! Form::model($post, ['route' => ['admin.posts.update', $post], 'autocomplete' => 'off', 'files' => true, 'method' => 'put']) !!}

                @include('admin.posts.partials.form')

                {!! Form::submit('Actualizar Post', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <style>
        .image-wrapper{
            position: relative;
            padding-bottom: 56.25%;
        }

        .image-wrapper img{
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
    <style>
        .sidebar-dark-primary{
            background: #455279 !important;
        }
    </style>
@stop

@section('js')

    {{-- JQuery Slug Plugin --}}
    <script src={{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}></script>
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>

    {{-- CKEditor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#extract' ) )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '#body' ) )
            .catch( error => {
                console.error( error );
            } );

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
@endsection
