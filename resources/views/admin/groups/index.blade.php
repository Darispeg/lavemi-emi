@extends('adminlte::page')

@section('title', 'Nosotros')

@section('content_header')
    <span>&nbsp;<i class="fas fa-home"></i>/&nbsp;Nosotros</span>
@stop

@section('content')
    <div class="card">
        <div class="card-header bg-secondary">
            <h4>Nosotros</h4>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Grupo</th>
                        <th>Descripcion</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>{!!$mision->name!!}</td>
                            <td>{!!$mision->description!!}</td>
                        </tr>
                        <tr>
                            <td>{!!$vision->name!!}</td>
                            <td>{!!$vision->description!!}</td>
                        </tr>
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
