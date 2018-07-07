@extends('adminlte::page')

@section('title', 'Painel Pesos')

@section('content')

    <section class="content">
        <h3> Dificuldades Usuários </h3>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Listagem de Dificuldades Usuários</h3>
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
                                <th class="col-md-3">Usuário</th>
                                <th class="col-md-5">Característica</th>
                                <th class="col-md-2">Peso</th>
                                <th class="col-md-2">Editar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($dificuldadesUsuarios as $dificuldadeUsuario)
                                <tr>
                                    <td>{{ $dificuldadeUsuario->usuario->nome }}</td>
                                    <td>{{ $dificuldadeUsuario->caracteristica->nome }}</td>
                                    <td>{{ $dificuldadeUsuario->peso }}</td>
                                    <td>
                                        <a href="{{route('dificuldades_usuarios.show', $dificuldadeUsuario->id)}}" title="Editar Dificuldade Usuário" class="btn btn-warning glyphicon glyphicon-pencil"></a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        {{$dificuldadesUsuarios->links()}}
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
    </section>
@stop