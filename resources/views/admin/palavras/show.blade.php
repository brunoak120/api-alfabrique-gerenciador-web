@extends('adminlte::page')

@section('title', 'Painel Palavras')

@section('content')

    <section class="content">
        <h3> Palavras </h3>
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Editar Palavra</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{route('palavras.update', $palavra->id)}}" method="post" role="form" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <div class="box-body">
                    @include('admin.includes.alerts')
                    <div class="form-group">
                        <label for="nome">Palavra</label>
                        <input type="input" name="nome" id="nome"  class="form-control" placeholder="Nome da palavra" value="{{$palavra->nome}}">
                    </div>
                    <div class="form-group">
                        <label for="categoria_id">Categoria</label>
                        <label>Select</label>
                        <select name="categoria_id" id="categoria_id" class="form-control">
                            @foreach($categorias as $categoria)
                                <option
                                        value="{{$categoria->id}}"
                                        @if ($categoria->id == $palavra->categoria_id)
                                        selected
                                        @endif >{{$categoria->nome}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        @if ($palavra->imagem != null)
                            <p>Imagem existente:</p>
                            <img id="myImg"
                                 src="{{ url("{$palavra->imagem}") }}"
                                 width="100"/><br></br>
                        @else
                            <p style="color: red">Nenhuma imagem inserida</p>
                        @endif
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