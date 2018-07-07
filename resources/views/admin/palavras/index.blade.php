@extends('adminlte::page')

@section('title', 'Painel Palavras')

@section('content')

    <section class="content">
        <h3> Palavras </h3>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Listagem de Palavras</h3>
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
                                <th class="col-md-2">Categoria</th>
                                <th class="col-md-8">Nome</th>
                                <th class="col-md-2">Ação</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($palavras as $palavra)
                                <tr>
                                    <td>{{ $palavra->categoria->nome }}</td>
                                    <td>{{ $palavra->nome }}</td>
                                        <td>
                                            <a href="{{route('palavras.show', $palavra->id)}}" title="Editar Palavra" class="btn btn-warning glyphicon glyphicon-pencil"></a>
                                            <a data-id="{{$palavra->id}}" class="btn btn-danger glyphicon glyphicon-remove removePalavra" title="Excluir Palavra"></a>
                                        </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        {{$palavras->links()}}
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