@extends('base.base')

@section('titulo')
    FALE CONOSCO
@endsection

@section('conteudo')

<form action="{{route('base.cadastro')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="nome" class="form-label"><strong>Nome</strong></label>
        <input type="text" name="nome" id="nome" class="form-control">
    </div>
    <div class="form-group">
        <label for="email" class="form-label"><strong>E-mail</strong></label>
        <input type="email" name="email" id="email" class="form-control">
    </div>
    <hr>
    <input type="submit" value="ENVIAR" class="btn btn-dark">
</form>

@endsection
