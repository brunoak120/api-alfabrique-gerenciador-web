@extends('adminlte::page')

@section('title', 'Painel Estatísticas')

@section('content')

    <section class="content">
        <h3> Estatísticas </h3>

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Quantidade de jogadores de cada estado</h3>
            </div>
            <div style="width:75%;">
                {!! $chartjs->render() !!}
            </div>
        </div>
    </section>
@stop