@extends('adminlte::page')

@section('title', 'Painel Palavras')

@section('content')

    <section class="content">
        <h3> Configurações </h3>
        <div class="callout callout-info" style="margin-bottom: 5px!important;">
            <h4><i class="fa fa-info"></i> Descrição:</h4>
            {{$config->descricao}}
        </div>
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Listagem de Configurações</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{route('configs.update', $config->id)}}" method="post" role="form" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <div class="box-body">
                    @include('admin.errors._check_form')
                    @include('flash::message')
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input name="nome" id="nome"  class="form-control" placeholder="Nome da Configuração" value="{{$config->nome}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="descricao">Valor</label>
                        <input type="number" name="valor" id="valor" class="form-control" placeholder="Valor da Configuração" value="{{$config->valor}}">
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                    <a href="{{route('configs.index')}}" class="btn btn-default">Voltar</a>
                </div>
            </form>
        </div>
    </section>
@stop