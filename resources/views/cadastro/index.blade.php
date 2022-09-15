@extends('base.base')
@section('conteudo')
    <h1>CADASTROS</h1>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>Ações</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Observações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cadastros as $cadastro)                            
            <tr>
                <td>VER || EDITAR || DELETAR</td>
                <td>{{ $cadastro->nome}}</td>
                <td>{{ $cadastro->email}}</td>
                <td>{!!$cadastro->observacoes !!}</td>
            </tr>
            @endforeach
        </tbody>
        
    </table>
@endsection
