@extends('adminlte::page')

@section('title', 'Painel Palavras')

@section('content')

    <section class="content">
        <h3> Perfil </h3>
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Perfil do Usuário {{Auth::user()->nome}}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{route('admin.change_pass', Auth::user()->id)}}" method="post" role="form" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <div class="box-body">
                    @include('flash::message')
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="nome" name="nome" id="nome" class="form-control" placeholder="Nome usuário" value="{{$usuario->nome}}">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email"  class="form-control" placeholder="Email usuário" value="{{$usuario->email}}">
                    </div>
                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <input type="text" name="estado" id="estado"  class="form-control" placeholder="Estado" value="{{$cidade->estado->nome}}">
                    </div>
                    <div class="form-group">
                        <label for="cidade">Cidade</label>
                        <input type="text" name="cidade" id="cidade"  class="form-control" placeholder="Cidade" value="{{$cidade->nome}}">
                    </div>
                    <div class="form-group">
                        <label for="rua">Rua</label>
                        <input type="text" name="rua" id="rua"  class="form-control" placeholder="Rua" value="{{$usuario->endereco->logradouro}}">
                    </div>
                    <div class="form-group">
                        <label for="numero">N°</label>
                        <input type="text" name="numero" id="numero"  class="form-control" placeholder="Número" value="{{$usuario->endereco->numero}}">
                    </div>
                    <div class="form-group">
                        <label for="bairro">Bairro</label>
                        <input type="text" name="bairro" id="bairro"  class="form-control" placeholder="Bairro" value="{{$usuario->endereco->bairro}}">
                    </div>
                    <div class="form-group">
                        <label for="complemento">Complemento</label>
                        <input type="text" name="complemento" id="complemento"  class="form-control" placeholder="Complemento" value="{{$usuario->endereco->complemento}}">
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