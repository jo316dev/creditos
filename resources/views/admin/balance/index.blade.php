@extends('adminlte::page')

@section('title', 'Creditos - Saldo')

@section('content_header')
    <h1>Saldo</h1>
@stop

@section('content')
    <div class="box">
        <div class="card">
            <div class="card-header">
                <h2 class="title">Meu Saldo</h2>
            </div>
            <div class="card-body">
               <div class="row">
                   <div class="col-lg-3">

                    <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                            <h3>R${{ number_format($amount, 2, '.', ',')}}</h3>
            
                            <p>Saldo vigente</p>
                            </div>
                            <div class="icon">
                            <i class="fas fa-file-invoice-dollar"></i>
                            </div>
                            <a href="#" class="small-box-footer">Ver Extrato <i class="fas fa-arrow-circle-right"></i></a>
                        </div>

                        <div class="card-footer">
                           <a href="{{ route('balance.deposit') }}" class="btn btn-primary">Recarregar</a>
                           <a href="" class="btn btn-danger">Sacar</a>
                        </div>
            
                   </div>
               </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


