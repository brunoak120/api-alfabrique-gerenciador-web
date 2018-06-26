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
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @include('flash::message')
                        <table id="date_picker" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Usuário</th>
                                <th>Característica</th>
                                <th>Peso</th>
                                <th>Editar</th>
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
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
    </section>
@stop