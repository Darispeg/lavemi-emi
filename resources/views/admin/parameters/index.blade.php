@extends('adminlte::page')

@section('title', 'Autoridades')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.parameters.create')}}">
        Agregar Autoridad
    </a>
    <span>&nbsp;<i class="fas fa-home"></i>/&nbsp;Autoridades</span>
@stop

@section('content')
    <div class="card">
        <div class="card-header bg-secondary">
            <h4>Autoridad</h4>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($parameters as $parameter)
                        <tr>
                            <td>{!!$parameter->description!!}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{route('admin.parameters.edit', $parameter)}}">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
@section('css')
    <style>
        .sidebar-dark-primary{
            background: #455279 !important;
        }
    </style>
@stop
