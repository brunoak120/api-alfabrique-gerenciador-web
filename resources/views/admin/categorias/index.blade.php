@extends('adminlte::page')

@section('title', 'Painel Palavras')

@section('content')

    <section class="content">
        <h3> Categorias </h3>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Listagem de Categorias</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @include('admin.includes.alerts')
                        <table id="date_picker" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Ação</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($categorias as $categoria)
                                <tr>
                                    <td>{{ $categoria->nome }}</td>
                                    <form action="{{route('categorias.destroy', $categoria->id)}}" method="post">
                                        <td>
                                            <a href="{{route('categorias.show', $categoria->id)}}" title="Editar Categoria" class="btn btn-warning glyphicon glyphicon-pencil"></a>
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger glyphicon glyphicon-remove " title="Excluir Categoria"></button>
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