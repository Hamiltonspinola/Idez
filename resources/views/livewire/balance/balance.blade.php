@extends('adminlte::page')

@section('title', "Contas")

@section('content_header')
    <h1>Saldo<h1>
@stop

@section('content')

<div class="box">
    <div class="box-header">        
        <a href="{{ route('balance.create') }}" class="btn btn-primary">
          <i class="fa fa-money" aria-hidden="true"></i>Recarregar</a>   
        
        @if ($balance->amount>=0)        
        <a href="{{ route('balance.saque') }}" class="btn btn-danger">
          <i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Sacar</a>    
        @endif
        
        @if ($balance->amount>=0)
        <i class="fa fa-exchange" aria-hidden="true"></i>
        <a href="{{ route('balance.transfer') }}" class="btn btn-danger">Transferir</a>    
        @endif
        
    </div>
    <div class="box-body">
        <div class="small-box bg-success">
            <div class="inner">
              <h3>R$ {{ number_format($balance->amount, 2, '.', '') }}</h3>

              <p>Bounce Rate</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
    </div>
</div>

@stop


