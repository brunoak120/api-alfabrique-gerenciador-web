<!-- /.box-header -->
<div class="box-body">
    @include('flash::message')
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th class="col-md-10">Nome</th>
            <th class="col-md-2">Ação</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($categorias as $categoria)
            <tr>
                <td>{{ $categoria->nome }}</td>
                <td>
                    <a href="{{route('categorias.show', $categoria->id)}}" title="Editar Categoria" class="btn btn-warning glyphicon glyphicon-pencil"></a>
                    <a data-id="{{$categoria->id}}" class="btn btn-danger glyphicon glyphicon-remove removeCategoria" title="Excluir Categoria"></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<!-- /.box-body -->
<div class="box-footer clearfix">
    <ul class="pagination pagination-sm no-margin pull-right">
        {{$categorias->links()}}
    </ul>
</div>