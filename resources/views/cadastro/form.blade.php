@extends('base.base')
@section('conteudo')

@if($cadastro)
    <form action="{{ route ('cadastro.update', [ 'id'=>$cadastro->id ]) }}" method="post">
@else
    <form action="{{ route ('cadastro.store') }}" method="post">
@endif
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">nome</label>
        <input type="text" class="form-control" id="nome" name="nome"
        value="{{ $cadastro ? $cadastro->nome : old('nome') }}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email"
        value="{{ $cadastro ? $cadastro->email : old('email') }}">
    </div>
    <div class="mb-3">
        <label for="observacoes" class="form-label">observacoes</label>
        <textarea class="form-control" id="observacoes" rows="3" name="observacoes">{{ $cadastro ? $cadastro->observacoes : old('observacoes') }}"</textarea>
    </div>
    <div>
        
        <input type="submit" class="btn btn-success" value="{{ $cadastro ? 'Atualizar' : 'Cadastrar'}}">
    </div>
</form>
@endsection
