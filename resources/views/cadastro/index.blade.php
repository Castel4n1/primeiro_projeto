@extends('base.base')
@section('conteudo')
    <h1>CADASTROS</h1>
    <a href="{{ route('cadastro.create') }}" class="btn btn-success">CADASTRAR</a>
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
                <td>
                    <a class="btn btn-success"
                    href="{{ route('cadastro.show', ['id'=>$cadastro->id ]) }}">
                    VER
                    </a>    
                    <a class="btn btn-success"
                    href="{{ route('cadastro.edit', ['id'=>$cadastro->id ]) }}">
                    EDITAR
                    </a>        
                    <a class="btn btn-success"
                    href="{{ route('cadastro.destroy', ['id'=>$cadastro->id ]) }}">
                    EXCLUIR
                    </a>           
                </td>
                <td>
                   
                </td>
                <td>{{ $cadastro->nome}}</td>
                <td>{{ $cadastro->email}}</td>
                <td>{!!$cadastro->observacoes !!}</td>
            </tr>
            @endforeach
        </tbody>
        
    </table>
@endsection
