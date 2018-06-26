@extends('adminlte::page')

@section('title', 'Painel Palavras')

@section('content')

    <section class="content">
        <h3> Dificuldade Usuário </h3>
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Editar Dificuldade Usuário</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{route('dificuldades_usuarios.update', $dificuldadeUsuario->id)}}" method="post" role="form" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <div class="box-body">
                    @include('flash::message')
                    <div class="form-group">
                        <label for="nome">Usuário</label>
                        <input type="input" name="nome" id="nome"  class="form-control" placeholder="Nome do Usuário" value="{{$dificuldadeUsuario->usuario->nome}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="nome">Característica</label>
                        <input type="input" name="caracteristica" id="caracteristica"  class="form-control" placeholder="Nome da Característica" value="{{$dificuldadeUsuario->caracteristica->nome}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="nome">Peso</label>
                        <input type="number" name="peso" id="peso"  class="form-control" placeholder="Valor do Peso" value="{{$dificuldadeUsuario->peso}}" >
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