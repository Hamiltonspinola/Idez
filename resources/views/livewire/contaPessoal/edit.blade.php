@extends('adminlte::page')

@section('title', "Contas")

@section('content_header')    
    <h1>Editrar Conta Empresarial <h1>
    <a href="{{ route('contaPessoal.render') }}"><button class="btn btn-success">Contas</button></a>
@stop

@section('content')

<div class="card-body">
    <table class="table table-condensed">
        <tbody>
            <form action="{{ route('contaPessoal.update', $contaPessoal->id) }}" method="post" class="form-group">
            @csrf
            @method('PUT')

                <tr>
                    <th>
                        <Label for="agencia">Agencia: </Label><br>
                        <input type="text" class="form-controll" placeholder="Digite a Agencia..." name="agencia" value="{{ $contaPessoal->agencia }}">
                    </th>
                    <th>
                        <Label for="numero">Número da Conta: </Label><br>
                        <input type="text" class="form-controll" placeholder="Digite o Número da Conta..." name="numero" value="{{ $contaPessoal->numero }}">
                    </th>
                    <th>
                        <Label for="digito">Dígito: </label><br>
                        <input type="text" class="form-controll" placeholder="Digite o Dígito da Conta..." name="digito" value="{{ $contaPessoal->digito }}">
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