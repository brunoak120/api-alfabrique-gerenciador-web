@extends('adminlte::page')

@section('title', 'Painel')

@section('content')

    <section class="content">
        <h3> Administrador </h3>
        <h4> Configurações </h4>
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-hand-paper-o"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Acessórios</span>
                        <span class="info-box-number"><a href=""> Ver </a></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-mouse-pointer"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Tipo de Equipamentos</span>
                        <span class="info-box-number"><a href=""> Ver </a></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="fa fa-desktop"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Equipamentos</span>
                        <span class="info-box-number"><a href=""> Ver </a></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="fa fa-mouse-pointer"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Tipo de Serviços</span>
                        <span class="info-box-number"><a href=""> Ver </a></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-home"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Delegacias</span>
                        <span class="info-box-number"><a href=""> Ver </a></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-home"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Departamentos</span>
                        <span class="info-box-number"><a href=""> Ver </a></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="fa fa-user-plus"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Usuários</span>
                        <span class="info-box-number"><a href=""> Ver </a></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="ion ion-ios-gear-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Fazer Backup</span>
                        <span class="info-box-number"><a href="#"> Download </a></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
        </div>
        <!-- /.row -->
    </section>

    <section class="container">
        <h4> Relatórios </h4>
        <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-12">
                <form method="POST" class="form form-inline">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <select class="form-control" name="relatorio">
                            <option value="">--Tipo de Relatório--</option>
                            <option value="Em Análise"> Serviços Realizados </option>
                            <option value="Aguardando Peça"> Peças mais Trocadas </option>
                            <option value="Em Manutenção"> Serviços mais Realizados </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="month" name="data" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Gerar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="content">
        <h3> Técnico </h3>
        <div class="row">
            <div class="col-md-6">
                <!-- Info Boxes Style 2 -->
                <div class="info-box bg-yellow">
                    <span class="info-box-icon"><i class="fa fa-battery-empty"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Situação: Em Análise</span>
                        <span class="info-box-number">5</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="progress-description">
                        Total
                    </span>
                    </div>
                </div>

                <div class="info-box bg-red">
                    <span class="info-box-icon"><i class="fa fa-battery-quarter"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Situação: Aguardando Peça</span>
                        <span class="info-box-number">10</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="progress-description">
                        Total
                    </span>
                    </div>
                </div>

            </div>

            <div class="col-md-6">

                <div class="info-box bg-aqua">
                    <span class="info-box-icon"><i class="fa fa-battery-three-quarters"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Situação: Em Manutenção</span>
                        <span class="info-box-number">3</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="progress-description">
                        Total
                    </span>
                    </div>
                </div>

                <div class="info-box bg-green">
                    <span class="info-box-icon"><i class="fa fa-battery-full"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Situação: Finalizados</span>
                        <span class="info-box-number">30</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="progress-description">
                        Total
                    </span>
                    </div>
                </div>

            </div>
        </div>
    </section>
@stop