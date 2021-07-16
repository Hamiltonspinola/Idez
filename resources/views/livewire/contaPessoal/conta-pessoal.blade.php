@extends('adminlte::page')

@section('title', "Contas")

@section('content_header')
    <h1>Conta Pessoal<h1>
@stop

@section('content')

<div class="card-body">
    <table class="table table-condensed">

        <thead>

            <tr>
                <th>Nome de Usuário</th>
                <th>Agência</th>
                <th>Número da conta</th>
                <th>Dígito</th>
                <th>Ações</th>
            </tr>

        </thead>
        
        <tbody>
            <a href="{{ route('contaPessoal.create') }}"><button class="btn btn-dark">Cadastrar</button></a>

            @foreach ($contaPessoal as $item)

            <tr>
                <td>
                    {{ $item->user->name }} - 
                </td>
                <td>
                    {{ $item->agencia }}
                </td>
                <td>
                    {{ $item->numero }}
                </td>
                <td>
                    {{ $item->digito }}
                </td>
                <td>
                    <a href="{{ route('contaPessoal.edit', $item->id) }}"><button class="btn btn-warning">Editar</button></a>
                    <a href="{{ route('contaPessoal.show', $item->id) }}"><button class="btn btn-warning">Consultar</button></a>
                </td>         
            </tr>
                
            @endforeach
             
            
        </tbody>
    </table>
</div>

@stop


