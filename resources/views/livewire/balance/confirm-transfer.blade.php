@extends('adminlte::page')

@section('title', "Contas")

@section('content_header')    
    <h1>Confirmação <h1>
    <a href="{{ route('contaEmpresarial.render') }}"><button class="btn btn-success">Contas</button></a>
@stop

@section('content')

<div class="card-body">
    <table class="table table-condensed">
        <tbody>
            <form action="{{ route('balance.confirm.transfer.store') }}" method="post" class="form-group">
            @csrf
            <input type="hidden" class="form-controll" value="{{ $sender->id }}" name="sender_id">

                <tr>
                    <th>
                        <Label for="value">Confirma o usuário? </Label><br>
                        <input type="text" class="form-controll" placeholder="Insira o valor da transferencia" name="value">
                    </th>
                    <th>
                        <td>Destinatário: {{ $sender->user->name }}</td>
                    </th> 
                    <th>
                        <td>Nome Fantasia: {{ $sender->nome_fantasia }}</td>
                    </th>                    
                    <th>
                        <td>Razão Social: {{ $sender->razao_social }}</td>
                    </th>
                    <th>
                        <td>CNJPJ: {{ $sender->cnpj }}</td>
                    </th>
                </tr>
                <tr>
                    <th>
                        <input type="submit" value="Enviar" class="btn btn-info">
                    </th>
                </tr>
            
            </form>
        </tbody>

    </table>

</div>

@stop