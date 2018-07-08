<!-- /.box-header -->
<div class="box-body">
    @include('flash::message')
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th class="col-md-3">Usuário</th>
            <th class="col-md-5">Característica</th>
            <th class="col-md-2">Peso</th>
            <th class="col-md-2">Editar</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($dificuldadesUsuarios as $dificuldadeUsuario)
            <tr>
                <td>{{ $dificuldadeUsuario->usuario_nome }}</td>
                <td>{{ $dificuldadeUsuario->caracteristica_nome }}</td>
                <td>{{ $dificuldadeUsuario->peso }}</td>
                <td>
                    <a href="{{route('dificuldades_usuarios.show', $dificuldadeUsuario->id)}}" title="Editar Dificuldade Usuário" class="btn btn-warning glyphicon glyphicon-pencil"></a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

</div>
<!-- /.box-body -->
<div class="box-footer clearfix">
    <ul class="pagination pagination-sm no-margin pull-right">
        {{$dificuldadesUsuarios->links()}}
    </ul>
</div>