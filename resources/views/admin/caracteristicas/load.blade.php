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
        @foreach ($caracteristicas as $caracteristica)
            <tr>
                <td>{{ $caracteristica->nome }}</td>
                <td>
                    @if ($caracteristica->id > 1)
                        <a href="{{route('caracteristicas.show', $caracteristica->id)}}" title="Editar Caracteristica" class="btn btn-warning glyphicon glyphicon-pencil"></a>
                        <a data-id="{{$caracteristica->id}}" class="btn btn-danger glyphicon glyphicon-remove removeCaracteristica" title="Excluir Caracteristica"></a>
                    @else
                        <i class="btn btn-danger glyphicon glyphicon-warning-sign" title="Característica Padrão"></i>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<!-- /.box-body -->
<div class="box-footer clearfix">
    <ul class="pagination pagination-sm no-margin pull-right">
        {{$caracteristicas->links()}}
    </ul>
</div>