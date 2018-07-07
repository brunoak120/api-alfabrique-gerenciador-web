@extends('adminlte::page')

@section('title', 'Painel Palavras')

@section('content')

    <section class="content">
        <h3> Configurações </h3>
        <div class="callout callout-info" style="margin-bottom: 0!important;">
            <h4><i class="fa fa-info"></i> Nota:</h4>
            Colocar a seta sobre o ícone de informações (azul) para ter acesso as descrições das configurações.
        </div>
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
                                <th>Funções</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($configs as $config)
                                <tr>
                                    <td>{{ $config->nome }}</td>
                                    <td>{{ $config->valor }}</td>
                                    <td>
                                       <a href="{{route('configs.show', $config->id)}}" title="Editar Configuração" class="btn btn-warning glyphicon glyphicon-pencil"></a>
                                       <a title="{{ $config->descricao }}" class="btn btn-info glyphicon glyphicon-info-sign"></a>
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