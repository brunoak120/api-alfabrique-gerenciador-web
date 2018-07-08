@extends('adminlte::page')

@section('title', 'Painel Pesos')

@push('js')
    <script src="{{ asset('js/funcoes-nivel-dificuldade.js') }}"></script>
@endpush


@section('content')

    <section class="content">
        <h3> Dificuldades Usuários </h3>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Listagem de Dificuldades Usuários</h3>
                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="busca_dificuldades_usuarios" id="busca_dificuldades_usuarios" class="form-control pull-right" placeholder="Buscar">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default" id="botao_busca_dificuldades_usuarios"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section id="dificuldades_usuarios_renderiza">
                        @include('admin.dificuldades_usuarios.load')
                    </section>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
    </section>
@stop