@extends('layouts.admin')
   
@section('content')
<form action="{{ route('admin.create.products') }}" method="POST" enctype="multipart/form-data">
    <div class="container mt-5">
            @csrf
            <input type="text" class="hidden" hidden name="id" value="{{ isset($product) ? $product->id : null }}"/>
            <div class="row">
                <div class="form-group col-md-7">
                    <label for="exampleInputEmail1">Nome do Produto</label>
                    <input type="text" class="form-control" maxlength="20" placeholder="Nome..." name="name" value="{{ isset($product) ? $product->name : null }}"/>
                    <div class="div_tamanho_manuais">
                        *Tamanho do nome: 20 Caracteres
                    </div>
                </div>
                    {{ isset($product) && $product->status == 'ativo' ? 'selected' : null }} >Ativo</option>
                    {{ isset($product) && $product->status == 'inativo' ? 'selected' : null }}>Inativo</option>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <div class="flex_add_imagem_categoria">
                        <i class="las la-upload icone_add_imagem_banner"></i>
                        <div class="text_add_imagem_banner">
                            Arraste um arquivo<br>ou clique para inserir.
                        </div>
                    </div>
                    <div class="div_tamanho_manuais">
                        *Tamanho das imagens: 1000x1000 / Formatos de arquivo aceitos: .Jpeg .png
                    </div>
                </div>
            </div>
            <div>
                <input type="submit" class="btn btn-success" value="Enviar"/>
            </div>
            @if(isset($product) && !empty($product))
                <a href="{{route('admin.delete.product', [$product->id])}}" class="btn btn-danger">Excluir</a>
            @endif

        @if ($errors->any())
            <div class="alert alert-danger col-12">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (Session()->has('success'))
            <div class="alert alert-success col-12">
                {{Session('success')}}
            </div>
        @endif
    </div>
</form>   
@endsection
