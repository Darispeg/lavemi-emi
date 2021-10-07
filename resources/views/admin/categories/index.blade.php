@extends('adminlte::page')

@section('title', 'Categoria')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.categories.create')}}">
        Agregar Categoria
    </a>
    <span>&nbsp;<i class="fas fa-home"></i>/&nbsp;Categorias</span>
@stop

@section('content')
    <div class="card">
        <div class="card-header bg-secondary">
            <h4>Editar Categoria</h4>
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
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{route('admin.categories.edit', $category)}}">Editar</a>
                            </td>
                            <td>
                                <form action="{{route('admin.categories.destroy', $category)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
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
