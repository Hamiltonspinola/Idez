@extends('adminlte::page')

@section('title', "Contas")

@section('content_header')    
    <h1>Depósito <h1>
    <a href="{{ route('contaEmpresarial.render') }}"><button class="btn btn-success">Contas</button></a>
@stop

@section('content')

<div class="card-body">
    <table class="table table-condensed">
        <tbody>
            <form action="{{ route('balance.store') }}" method="post" class="form-group">
            @csrf

                <tr>
                    <th>
                        <Label for="value">Valor: </Label><br>
                        <input type="text" class="form-controll" placeholder="Insira o valor da recarga" name="value">
                    </th>                   
                </tr>
                <tr>
                    <th>
                        <input type="submit" value="Criar" class="btn btn-info">
                    </th>
                </tr>
            
            </form>
        </tbody>

    </table>

</div>

@stop