@extends('adminlte::page')

@section('title', 'Painel Palavras')

@section('content')

    <section class="content">
        <h3> Caracteristicas </h3>
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Adicionar Categoria</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{route('caracteristicas.store')}}" method="post" role="form" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="box-body">
                    @include('flash::message')
                    <div class="form-group">
                        <label for="nome">Caracteristicas</label>
                        <input type="input" name="nome" id="nome"  class="form-control" placeholder="Nome da caracteristica">
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <textarea type="textarea" name="descricao" id="descricao"  class="form-control" placeholder="Descrição da caracteristica"></textarea>
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