@extends('adminlte::page')

@section('title', 'Painel Palavras')

@section('content')

    <section class="content">
        <h3> Categorias </h3>
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Editar Caracteristica</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{route('caracteristicas.update', $caracteristica->id)}}" method="post" role="form" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <div class="box-body">
                    @include('flash::message')
                    <div class="form-group">
                        <label for="nome">Categoria</label>
                        <input type="input" name="nome" id="nome"  class="form-control" placeholder="Nome da palavra" value="{{$caracteristica->nome}}">
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <textarea name="descricao" id="descricao"  class="form-control" placeholder="Descrição da caracteristica">{{$caracteristica->descricao}}</textarea>
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