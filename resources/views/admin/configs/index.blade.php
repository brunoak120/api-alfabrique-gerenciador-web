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
                                <th class="col-md-6">Nome</th>
                                <th class="col-md-4">Valor</th>
                                <th class="col-md-2">Funções</th>
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
                        {{$configs->links()}}
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