@extends('adminlte::page')

@section('title', 'Parametros')

@section('content_header')
    <span>&nbsp;<i class="fas fa-home"></i>/&nbsp;Nosotros/&nbsp;editar</span>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-header bg-secondary">
            <h4>Editar Parametro</h4>
        </div>
        <div class="card-body">
            {!! Form::model($groupParameter, ['route' => ['admin.groups.update'], 'autocomplete' => 'off', 'method' => 'put']) !!}

                @include('admin.groups.partials.form')

                {!! Form::submit('Actualizar Grupo', ['class' => 'btn btn-primary']) !!}

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
    {{-- CKEditor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#description' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@stop
