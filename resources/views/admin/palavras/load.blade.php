<!-- /.box-header -->
<div class="box-body">
    @include('flash::message')
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th class="col-md-2">Categoria</th>
            <th class="col-md-8">Nome</th>
            <th class="col-md-2">Ação</th>
        </tr>
        </thead>
        <tbody id="tabela_palavras">
        @foreach ($palavras as $palavra)
            <tr>
                <td>{{ $palavra->categoria_nome }}</td>
                <td>{{ $palavra->nome }}</td>
                <td>
                    <a href="{{route('palavras.show', $palavra->id)}}" title="Editar Palavra" class="btn btn-warning glyphicon glyphicon-pencil"></a>
                    <a data-id="{{$palavra->id}}" class="btn btn-danger glyphicon glyphicon-remove removePalavra" title="Excluir Palavra"></a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>
<!-- /.box-body -->
<div class="box-footer clearfix">
    <ul class="pagination pagination-sm no-margin pull-right">
        {{$palavras->links()}}
    </ul>
</div>