@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <span>&nbsp;<i class="fas fa-home"></i>/&nbsp;Dashboard</span>
@stop

@section('content')
<div class="container">
    <div class="card-deck mt-3">
        <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
            <div class="card-body">
                <div class="row">
                    <div class="text-center col-md-7">
                        <h2 class="col-md-6 text-bold">{{$users->count()}}</h2>
                        <p class="card-title">USUARIOS</p>
                    </div>
                    <div class="col-md-3 text-right">
                        <i class="far fa-user fa-4x" style="color:#dcdcdd;"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center">
                <a href="" class="text-dark text-bold">
                    Mas Información
                </a>
            </div>
        </div>
        <div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
            <div class="card-body">
                <div class="row">
                    <div class="text-center col-md-7">
                        <h2 class="col-md-6 text-bold">{{$categories->count()}}</h2>
                        <p class="card-title">CATEGORIAS</p>
                    </div>
                    <div class="col-md-3 text-right">
                        <i class="fab fa-buffer fa-4x" style="color:#dcdcdd;"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center">
                <a href="{{route('admin.categories.index')}}" class="text-dark text-bold">
                    Mas Información
                </a>
            </div>
        </div>
        <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
            <div class="card-body">
                <div class="row">
                    <div class="text-center col-md-7">
                        <h2 class="col-md-6 text-bold">{{$tags->count()}}</h2>
                        <p class="card-title">ETIQUETAS</p>
                    </div>
                    <div class="col-md-3 text-right">
                        <i class="far fa-bookmark fa-4x" style="color:#dcdcdd;"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center">
                <a href="{{route('admin.tags.index')}}" class="text-dark text-bold">
                    Mas Información
                </a>
            </div>
        </div>
        <div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
            <div class="card-body">
                <div class="row">
                    <div class="text-center col-md-7">
                        <h2 class="col-md-6 text-bold">{{$posts->count()}}</h2>
                        <p class="card-title">POSTS</p>
                    </div>
                    <div class="col-md-3 text-right">
                        <i class="far fa-clipboard fa-4x" style="color:#dcdcdd;"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center">
                <a href="{{route('admin.posts.index')}}" class="text-dark text-bold">
                    Mas Información
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Etiqueta</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr class="text-center">
                            <th scope="row" class="bg-{{$tag->color}} col-md-1">
                                <i class="fas fa-bookmark" style="color:#ffffff;"></i>
                            </th>
                            <td>{{$tag->name}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card">
            <div class="card-header bg-secondary text-center">
                USUARIOS REGISTRADOS
            </div>
            <table class="table table-bordered">
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row" class="text-center">
                                <i class="far fa-user"></i>
                            </th>
                            <td>{{$user->name}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
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

