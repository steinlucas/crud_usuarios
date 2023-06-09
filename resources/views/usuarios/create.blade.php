@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
        <h3>Novo Usuário</h3>
        <form action={{ route('usuario.store') }} method="post">
        @csrf
            <div>
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome">
            </div>
            <div>
                <label for="modelo">Endereço</label>
                <input type="text" id="endereco" name="endereco">
            </div>
            <div>
                <label for="fabricante">Telefone</label>
                <input type="text" id="telefone" name="telefone">
            </div>
            <div class="form-group">
                    <input type="submit" name="save_usuario" value="Salvar usuário" class="btn btn-success">
                    <input type="submit" name="cancel" value="Cancelar" class="btn btn-info">
                </div>

        <form>
    </div>
    </form>
</div>
@endsection


