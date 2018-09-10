@extends('adminlte::page')

@section('title', 'Painel Palavras')

@section('content')

    <section class="content">
        <h3> Perfil </h3>
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Perfil do Usuário {{auth()->user()->nome}}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{route('admin.change_profile', auth()->user()->id)}}" method="post" role="form" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <div class="box-body">
                    @include('admin.errors._check_form')
                    @include('flash::message')
                    <div class=" form-group row">
                        <div class="col-md-6">
                            <label for="nome">Nome</label>
                            <input type="nome" name="nome" id="nome" class="form-control" placeholder="Nome usuário" value="{{$usuario->nome}}">
                        </div>
                        <div class="col-md-6">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email"  class="form-control" placeholder="Email usuário" value="{{$usuario->email}}">
                        </div>
                    </div>
                    <div class=" form-group row">
                        <div class="col-md-2">
                            <label for="bairro">CEP</label>
                            <input type="text" name="cep" id="cep"  class="form-control" placeholder="CEP" value="{{$usuario->endereco->cep}}">
                        </div>
                        <div class="col-md-2">
                            <label for="estado">Estado</label>
                            <select name="estado" id="estado" class="form-control">
                            @foreach($estados as $estado)
                                @if ($estado->nome == $cidadeUsuario->estado->nome)
                                    <option selected value="{{$estado->id}}">{{$estado->nome}}</option>
                                @else
                                    <option value="{{$estado->id}}">{{$estado->nome}}</option>
                                @endif
                            @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="cidade">Cidade</label>
                            <select name="cidade" id="cidade" class="form-control">
                            @foreach($cidades as $cidade)
                                @if ($cidade->nome == $cidadeUsuario->nome)
                                    <option selected value="{{$cidade->id}}">{{$cidade->nome}}</option>
                                @else
                                    <option value="{{$cidade->id}}">{{$cidade->nome}}</option>
                                    @endif
                                    @endforeach
                             </select>
                        </div>
                        <div class="col-md-5">
                            <label for="logradouro">Logradouro</label>
                            <input type="text" name="logradouro" id="logradouro"  class="form-control" placeholder="Logradouro" value="{{$usuario->endereco->logradouro}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="bairro">Bairro</label>
                            <input type="text" name="bairro" id="bairro"  class="form-control" placeholder="Bairro" value="{{$usuario->endereco->bairro}}">
                        </div>
                        <div class="col-md-4">
                            <label for="complemento">Complemento</label>
                            <input type="text" name="complemento" id="complemento"  class="form-control" placeholder="Complemento" value="{{$usuario->endereco->complemento}}">
                        </div>
                        <div class="col-md-4">
                            <label for="complemento">Tipo Local</label>
                            <input type="text" name="tipo_local" id="tipo_local"  class="form-control" placeholder="Tipo Local" value="{{$usuario->endereco->tipo_local}}">
                        </div>
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