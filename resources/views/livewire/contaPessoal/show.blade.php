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
                <th>Razão social</th>
                <th>Nome Fantasia</th>
                <th>CNPJ</th>
                <th>Ações</th>
            </tr>

        </thead>
        
        <tbody>
            <a href="{{ route('contaPessoal.create') }}"><button class="btn btn-dark">Cadastrar</button></a>

            @foreach ($contaPessoal as $item)

            <tr>
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
                    <form action="{{ route('contaPessoal.destroy', $item->id) }}" method="post">
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


