@extends('layouts.admin')
   
@section('content')
<div class="container-fluid ph060">
    <div class="row mt20">
        <div class="form-group col-md-5">
            <div>
                <label for="data">Data</label>
                <input type="text" class="form-control" name="data" readonly value="10/10/2021"/>
            </div>
            <div class="mt20">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" />
            </div>
            <div class="mt20">
                <label for="genero">Gênero</label>
                <input type="text" class="form-control" name="genero" />
            </div>
            <div class="mt20">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" name="telefone" />
            </div>
            <div class="mt20">
                <label for="data">Data de nascimento</label>
                <input type="text" class="form-control" name="data" />
            </div>
            <div class="mt20">
                <label for="email">E-mail</label>
                <input type="text" class="form-control" name="email" />
            </div>
            <div class="mt20">
                <label for="senha">Senha</label>
                <input type="text" class="form-control" name="senha" />
            </div>
        </div>
    </div>
</div>











@endsection