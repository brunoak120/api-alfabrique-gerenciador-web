@extends('adminlte::page')

@section('title', 'Painel Home')

@section('content')

    <section class="content">
        <h3> Administrador </h3>
        <div class="row">
            <div class="col-md-4">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-font"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Palavras</span>
                        <span class="info-box-number"><a href="{{route('palavras.index')}}"> Ver </a></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-4">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-list"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Categorias</span>
                        <span class="info-box-number"><a href="{{route('categorias.index')}}"> Ver </a></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-4">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="fa fa-edit"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Pesos</span>
                        <span class="info-box-number"><a href="{{route('dificuldades_usuarios.index')}}"> Ver </a></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
@stop