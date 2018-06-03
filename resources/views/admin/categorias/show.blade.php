@extends('adminlte::page')

@section('title', 'Painel Palavras')

@section('content')

    <section class="content">
        <h3> Categorias </h3>
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Editar Categoria</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{route('categorias.update', $categoria->id)}}" method="post" role="form" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <div class="box-body">
                    @include('admin.includes.alerts')
                    <div class="form-group">
                        <label for="nome">Categoria</label>
                        <input type="input" name="nome" id="nome"  class="form-control" placeholder="Nome da palavra" value="{{$categoria->nome}}">
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
            </form>
        </div>
    </section>
@stop