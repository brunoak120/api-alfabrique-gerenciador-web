@extends('adminlte::page')

@section('title', 'Painel Palavras')

@section('content')

    <section class="content">
        <h3> Palavras </h3>
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Adicionar Palavra</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{route('palavras.store')}}" method="post" role="form" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="box-body">
                    @include('flash::message')
                    <div class="form-group">
                        <label for="nome">Palavra</label>
                        <input type="input" name="nome" id="nome"  class="form-control" placeholder="Nome da palavra">
                    </div>
                    <div class="form-group">
                        <label for="categoria_id">Categoria</label>
                        <label>Select</label>
                        <select name="categoria_id" id="categoria_id" class="form-control">
                            @foreach($categorias as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="imagem_palavra">Imagem</label>
                        <input name="imagem_palavra" id="imagem_palavra" type="file">
                        <p class="help-block">Imagens com formato jpeg e png.</p>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                </div>
            </form>
        </div>
    </section>
@stop