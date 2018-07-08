@extends('adminlte::page')

@section('title', 'Painel Palavras')

@push('js')
    <script src="{{ asset('js/funcoes-categorias.js') }}"></script>
@endpush

@section('content')

    <section class="content">
        <h3> Categorias </h3>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Listagem de Categorias</h3>
                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="busca_categoria" id="busca_categoria" class="form-control pull-right" placeholder="Buscar">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default" id="botao_busca_categoria"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section id="categorias_renderiza">
                        @include('admin.categorias.load')
                    </section>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@stop
