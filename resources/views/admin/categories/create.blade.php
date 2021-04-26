@extends('layouts.admin')
   
@section('content')
<form action="{{ route('admin.create.category') }}" method="POST" enctype="multipart/form-data" id="create-category-form">
    <div class="container mt-5">
        {{-- {{dd($budget, $budget->getCountBudgetItens(), $budget->products)}} --}}
            @csrf
            <input type="text" class="hidden" hidden name="id" value="{{ isset($category) ? $category->id : null }}"/>
            <div class="row">
                <div class="form-group col-md-7">
                    <label for="exampleInputEmail1">Nome da Categoria</label>
                    <input type="text" class="form-control" maxlength="20" placeholder="Nome..." name="name" value="{{ old('name') }}{{ isset($category) ? $category->name : null }}"/>
                    <div class="div_tamanho_manuais">
                        *Tamanho do nome: 20 Caracteres
                    </div>
                </div>
               <!--  <div class="form-group col-md-5">
                    <label for="exampleInputEmail1">Status</label>
                    <select type="text" class="form-control" maxlength="20" name="status">
                        <option value="ativo" {{ isset($category) && $category->status == 'ativo' ? 'selected' : null }} >Ativo</option>
                        <option value="inativo" {{ isset($category) && $category->status == 'inativo' ? 'selected' : null }}>Inativo</option>
                    </select>
                </div> -->
                <input type="hidden" name="status" id="status-input" value="">
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="file-upload p-0">
                        <div class="image-upload-wrap">
                            <input class="file-upload-input" id="imageUpload" name="file" type='file' onchange="readURL(this);" accept="image/*" />
                            <div class="drag-text">
                                <div class="form-group">
                                    <div class="flex_add_imagem_categoria " id="img-preview" style="background-image: url({{ isset($category->file) ?asset($category::DEFAULT_IMG_CATEGORY_DIR)."/".$category->file : null}});">
                                        <i class="las la-upload icone_add_imagem_banner banner-text" {{ isset($banner->image) ? 'hidden' : null}}></i>
                                        <div class="text_add_imagem_banner banner-text" {{ isset($banner->image) ? 'hidden' : null}}>
                                            Arraste um arquivo<br>ou clique para inserir.
                                        </div>
                                    </div>
                                    <div class="flex_texto_tamanho">
                                        *Tamanho do banner: 1920x1080 / Formatos de arquivo aceitos: .Jpeg .png
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(isset($category) && !empty($category))
                <a href="{{route('admin.delete.category', [$category->id])}}" class="btn btn-danger">Excluir</a>
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
    @if(isset($category) && !empty($category))
        <div class="ajusta_table mt20">
            <div class="topo_tabela_categorias">
                SUB-CATEGORIA
                <div class="icones_end_tabela_categorias">
                    <a href="{{route('admin.delete.category', [$category->id])}}">
                        <i class="las la-trash-alt icones_topo_tabela_categorias"></i>
                    </a>
                    <i class="las la-plus-square icones_topo_tabela_categorias ml_20_box"></i>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr class="title_table">
                        <th><input type="checkbox"></th>
                        <th scope="col" colspan="1" class="text-center">DATA CRIAÇÃO</th>
                        <th scope="col" colspan="1">NOME</th>
                        <th class="w_800_table_sub"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category->children()->get() as $child)
                        <tr>
                            <td><input type="checkbox"></td>
                            <td class="text-center">
                                10/10/2021
                            </td>
                            <td>Anestesia</td>
                            <td class="w_800_table_sub"></td>
                        </tr>
                    @endforeach
                    @foreach ($subcategories as $subcategory)
                        @if($category->id != $subcategory->id)
                            <tr>
                                <td><input type="checkbox"></td>
                                <td class="text-center">
                                    10/10/2021
                                </td>
                                <td>Anestesia</td>
                                <td class="w_800_table_sub"></td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</form>
<style>
    .w_800_table_sub{
        width: 800px;
    }
    .topo_tabela_categorias{
        background-color: #027EBC; 
        height: 50px; 
        display: flex; 
        align-items: center; 
        color: #fff;
        padding: 0 50px;
    }
    .icones_end_tabela_categorias{
        display: flex; 
        justify-content: flex-end; 
        align-items: center; 
        flex: 1;
    }
    .icones_topo_tabela_categorias{
        color: #fff;
        font-size: 25px;
    }


</style>



<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
            let fileURL = reader.result;

            $('#imageUpload').attr('src', e.target.result);
            document.getElementById('img-preview').style.backgroundImage = `url('${e.target.result}')`;

            let url = $('#imageUpload').val();
            $('#teste').css("background-image", `url('${url}')`);

            $('.image-title').html(input.files[0].name);
            };

            reader.readAsDataURL(input.files[0]);

            $('.banner-text').attr('hidden', true);

        } else {
            removeUpload();
        }
    }

    window.onload = function(e) {
        $('#select-status-top').change(function(){
            $('#status-input').val($(this).val());
        });

        $('#save-category-form').click(function() {
            $('#create-category-form').submit();
        });
    }
    
</script>
@endsection

<!-- @if(isset($category) && !empty($category))
        <div class="row">
            <div class="col-md-12">
                <label>Sub-categoria</label>
                <table>
                    <tbody>
                        @foreach ($category->children()->get() as $child)
                            <tr>
                                <td><input type="checkbox" name="sub_categories[]" checked value="{{$child->id}}"></td>
                                <td> {{$child->created_at}} </td>
                                <td> {{$child->name}} </td>
                            </tr>
                        @endforeach
                        @foreach ($subcategories as $subcategory)
                            @if($category->id != $subcategory->id)
                                <tr>
                                    <td><input type="checkbox" name="sub_categories[]" value="{{$subcategory->id}}"></td>
                                    <td> {{$subcategory->created_at}} </td>
                                    <td> {{$subcategory->name}} </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif -->