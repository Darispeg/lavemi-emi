<div class="card">
    <div class="card-header bg-secondary">
        <input wire:model="search" class="form-control" placeholder="Ingrese el nombre de un post">
    </div>
    @if ($posts->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->name}}</td>
                            <td width=10px>
                                <a class="btn btn-primary btn-sm" href="{{route('admin.posts.edit', $post)}}">Editar</a>
                            </td>
                            <td>
                                {!! Form::open(['route' => ['admin.posts.destroy',$post], 'method' => 'delete', 'onsubmit' => 'return confirm("Esta seguro de borrar el post?")']) !!}
                                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-sm']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$posts->links()}}
        </div>
    @else
        <div class="card-body">
            <strong>No hay ningun resgistro...</strong>
        </div>
    @endif
</div>
