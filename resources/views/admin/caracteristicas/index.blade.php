@extends('adminlte::page')

@section('title', 'Painel Palavras')

@push('js')
    <script src="{{ asset('js/funcoes-caracteristicas.js') }}"></script>
@endpush

@section('content')

    <section class="content">
        <h3> Caracteristicas </h3>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Listagem de Caracteristicas</h3>
                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="buscar_caracteristica" id="buscar_caracteristica" class="form-control pull-right" placeholder="Buscar">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default" id="botao_buscar_caracteristicas"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section id="caracteristicas_renderiza">
                        @include('admin.caracteristicas.load')
                    </section>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@stop