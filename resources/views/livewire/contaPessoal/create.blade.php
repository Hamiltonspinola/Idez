@extends('adminlte::page')

@section('title', "Contas")

@section('content_header')    
    <h1>Cadastrar Conta Pessoal <h1>
    <a href="{{ route('contaPessoal.render') }}"><button class="btn btn-success">Contas</button></a>
@stop

@section('content')

<div class="card-body">
    <table class="table table-condensed">
        <tbody>
            <form action="{{ route('contaPessoal.store') }}" method="post" class="form-group">
            @csrf
                <tr>
                    <th>
                        <Label for="agencia">Agencia: </Label><br>
                        <input type="text" class="form-controll" placeholder="Digite a Agencia..." name="agencia">
                    </th>
                    <th>
                        <Label for="numero">Número da Conta: </Label><br>
                        <input type="text" class="form-controll" placeholder="Digite o Número da Conta..." name="numero">
                    </th>
                    <th>
                        <Label for="digito">Dígito: </label><br>
                        <input type="text" class="form-controll" placeholder="Digite o Dígito da Conta..." name="digito">
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