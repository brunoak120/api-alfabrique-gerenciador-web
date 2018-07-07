@extends('adminlte::page')

@section('title', 'Painel Palavras')

@section('content')

    <section class="content">
        <h3> Caracteristicas </h3>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Listagem de Caracteristicas</h3>
                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Buscar">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @include('flash::message')
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Ação</th>
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
                            {{$caracteristicas->links()}}
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@stop