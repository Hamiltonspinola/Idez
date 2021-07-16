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
                    {{ $item->razao_social }}
                </td>
                <td>
                    {{ $item->nome_fantasia }}
                </td>
                <td>
                    {{ $item->cnpj }}
                </td>
                <td>
                    <form action="{{ route('contaEmpresarial.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-warning">Excluir</button>
                    </form>
                </td>         
            </tr>
                
            @endforeach
             
            
        </tbody>
    </table>
</div>

@stop


