@extends('adminlte::page')

@section('title', "Contas")

@section('content_header')
    <h1>Conta Empresarial<h1>
@stop

@section('content')

<div class="card-body">
    <table class="table table-condensed">

        <thead>

            <tr>
                <th>Nome de Usuário</th>
                <th>Razão social</th>
                <th>Nome Fantasia</th>
                <th>CNPJ</th>
                <th>Ações</th>
            </tr>

        </thead>
        
        <tbody>
            <a href="{{ route('contaEmpresarial.create') }}"><button class="btn btn-dark">Cadastrar</button></a>

            @foreach ($contaEmpresarial as $item)

            <tr>
                <td>
                    {{ $item->user->name }} - 
                </td>
                <td>
                    {{ $item->razao_social }}
                </td>
                <td>
                    {{ $item->nome_fantasiaa }}
                </td>
                <td>
                    {{ $item->cnpj }}
                </td>
                <td>
                    <a href="{{ route('contaEmpresarial.edit', $item->id) }}"><button class="btn btn-warning">Editar</button></a>
                    <a href="{{ route('contaEmpresarial.show', $item->id) }}"><button class="btn btn-warning">Consultar</button></a>
                </td>         
            </tr>
                
            @endforeach
             
            
        </tbody>
    </table>
</div>

@stop


