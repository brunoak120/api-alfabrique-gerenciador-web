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
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="date_picker" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Categoria</th>
                                <th>Nome</th>
                                <th>Ação</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($palavras as $palavra)
                                <tr>
                                    <td>{{ $palavra->categoria->nome }}</td>
                                    <td>{{ $palavra->nome }}</td>
                                    <form action="" method="post">
                                        <td>
                                            <a href="{{route('palavras.show', $palavra->id)}}" title="Editar Palavra" class="btn btn-warning glyphicon glyphicon-pencil"></a>
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger glyphicon glyphicon-remove " title="Excluir registro"></button>
                                        </td>
                                    </form>
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