@extends('adminlte::page')

@section('title', 'Creditos - Recarga')

@section('content_header')
    <h1>Recarga de Saldo</h1>
@stop

@section('content')
    <div class="box">
        <div class="card">
            <div class="card-header">
                <h2 class="title">Recarregar</h2>
            </div>
            <div class="card-body">
               <form action="{{ route('balance.store') }}" method="post">
                   @csrf
                   <div class="form-group">
                       <input type="text" name="value" id="" placeholder="Valor R$ " class="form-control">
                   </div>
                   <button type="submit" class="btn btn-success">Recarregar</button>
               </form>
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


