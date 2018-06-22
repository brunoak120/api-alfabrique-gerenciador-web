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
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @include('flash::message')
                        <table id="date_picker" class="table table-bordered table-hover">
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
                                            <a href="{{route('caracteristicas.show', $caracteristica->id)}}" title="Editar Caracteristica" class="btn btn-warning glyphicon glyphicon-pencil"></a>
                                            <a data-id="{{$caracteristica->id}}" class="btn btn-danger glyphicon glyphicon-remove removeCaracteristica" title="Excluir Caracteristica"></a>
                                        </td>
                                </tr>
                            @endforeach

                            </tbody>
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