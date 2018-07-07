@extends('adminlte::page')

@section('title', 'Painel Palavras')

@section('content')

    <section class="content">
        <h3> Configurações </h3>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Listagem de Configurações</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @include('flash::message')
                        <table id="date_picker" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Valor</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($configs as $config)
                                <tr>
                                    <td>{{ $config->nome }}</td>
                                    <td>
                                       <a href="{{route('configs.show', $config->id)}}" title="Editar Configuração" class="btn btn-warning glyphicon glyphicon-pencil"></a>
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