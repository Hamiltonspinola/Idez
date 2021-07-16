@extends('adminlte::page')

@section('title', "Contas")

@section('content_header')    
    <h1>Sacar <h1>
    <a href="{{ route('contaEmpresarial.render') }}"><button class="btn btn-success">Contas</button></a>
@stop

@section('content')

<div class="card-body">
    <table class="table table-condensed">
        <tbody>
            <form action="{{ route('balance.saque.store') }}" method="post" class="form-group">
            @csrf

                <tr>
                    <th>
                        <Label for="value">Valor do saque: </Label><br>
                        <input type="text" class="form-controll" placeholder="Insira o Nome Fantasia ou Razão Social" name="value">
                    </th>                   
                </tr>
                <tr>
                    <th>
                        <input type="submit" value="Retirar" class="btn btn-info">
                    </th>
                </tr>
            
            </form>
        </tbody>

    </table>

</div>

@stop