@extends('adminlte::page')

@section('title', 'Blog-Laravel')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.tags.create')}}">Nueva Etiqueta</a>
    <span>&nbsp;<i class="fas fa-home"></i>/&nbsp;Etiquetas&nbsp;</span>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-header bg-secondary">
            <h4>Lista de Etiquetas</h4>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <th class="text-center">Color</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td class="text-center">
                                <span class="bg-{{$tag->color}} rounded px-4 py-2">
                                    {{$tag->color}}
                                </span>
                            </td>
                            <td>
                                {{$tag->name}}
                            </td>
                            <td width="10px">
                                <a class="btn btn-primary btn:sm" href="{{route('admin.tags.edit', $tag)}}">
                                    Editar
                                </a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.tags.destroy', $tag)}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btm:sm" type="submit">Eliminar</button>
                                </form>
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

