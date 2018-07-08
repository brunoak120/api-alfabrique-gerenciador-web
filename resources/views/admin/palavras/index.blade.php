@extends('adminlte::page')

@section('title', 'Painel Palavras')

@push('js')
    <script src="{{ asset('js/funcoes-palavras.js') }}"></script>
@endpush

@section('content')
    <section class="content">
        <h3> Palavras </h3>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Listagem de Palavras</h3>
                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="buscar_palavra" id="buscar_palavra" class="form-control pull-right" placeholder="Buscar">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default" id="botao_buscar_palavras"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section id="palavras_renderiza">
                        @include('admin.palavras.load')
                    </section>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@stop

