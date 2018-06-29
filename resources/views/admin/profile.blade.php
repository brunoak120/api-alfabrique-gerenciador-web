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
                        <label for="nome">Confirmar Nova Senha</label>
                        <input type="password" name="new_pass_confirmation" id="new_pass_confirmation"  class="form-control" placeholder="Confirmar Nova Senha" >
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