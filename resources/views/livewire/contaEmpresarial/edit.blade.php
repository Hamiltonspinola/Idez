@extends('adminlte::page')

@section('title', "Contas")

@section('content_header')    
    <h1>Editrar Conta Empresarial <h1>
    <a href="{{ route('contaEmpresarial.render') }}"><button class="btn btn-success">Contas</button></a>
@stop

@section('content')

<div class="card-body">
    <table class="table table-condensed">
        <tbody>
            <form action="{{ route('contaEmpresarial.update', $contaEmpresarial->id) }}" method="post" class="form-group">
            @csrf
            @method('PUT')
                <tr>
                    <th>
                        <Label for="razao_social">Razão Social: </Label><br>
                        <input type="text" class="form-controll" placeholder="Digite a Razão Social..." name="razao_social" value="{{ $contaEmpresarial->razao_social }}">            
                    </th>

                    <th>
                        <Label for="nome_fantasia">Nome Fantasia: </Label><br>
                        <input type="text" class="form-controll" placeholder="Digite o Nome Fantasia..." name="nome_fantasia" value="{{ $contaEmpresarial->nome_fantasia }}">
                    </th>

                    <th>
                        <Label for="cnpj">CNPJ: </Label><br>
                        <input type="text" class="form-controll" placeholder="Digite o CNPJ..." name="cnpj" value="{{ $contaEmpresarial->cnpj }}"><br><br>
                    </th>
                </tr>

                <tr>
                    <th>
                        <Label for="agencia">Agencia: </Label><br>
                        <input type="text" class="form-controll" placeholder="Digite a Agencia..." name="agencia" value="{{ $contaEmpresarial->agencia }}">
                    </th>
                    <th>
                        <Label for="numero">Número da Conta: </Label><br>
                        <input type="text" class="form-controll" placeholder="Digite o Número da Conta..." name="numero" value="{{ $contaEmpresarial->numero }}">
                    </th>
                    <th>
                        <Label for="digito">Dígito: </label><br>
                        <input type="text" class="form-controll" placeholder="Digite o Dígito da Conta..." name="digito" value="{{ $contaEmpresarial->digito }}">
                    </th>                    
                </tr>
                <tr>
                    <th>
                        <input type="submit" value="Atualizar" class="btn btn-info">
                    </th>
                </tr>
            
            </form>
        </tbody>

    </table>

</div>

@stop