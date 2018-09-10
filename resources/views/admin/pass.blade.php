@extends('adminlte::page')

@section('title', 'Painel Palavras')

@section('content')

    <section class="content">
        <h3> Alterar Senha </h3>
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Alterar Senha do Usuário {{Auth::user()->nome}}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{route('admin.change_pass', Auth::user()->id)}}" method="post" role="form" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <div class="box-body">
                    @include('admin.errors._check_form')
                    @include('flash::message')
                    <div class="form-group">
                        <label for="old_pass">Senha Antiga</label>
                        <input type="password" name="old_pass" id="old_pass"  class="form-control" placeholder="Senha Antiga">
                    </div>
                    <div class="form-group">
                        <label for="new_pass">Nova Senha</label>
                        <input type="password" name="new_pass" id="new_pass"  class="form-control" placeholder="Nova Senha">
                    </div>
                    <div class="form-group">
                        <label for="new_pass_confirmation">Confirmar Nova Senha</label>
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