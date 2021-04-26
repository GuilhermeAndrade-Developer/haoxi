@extends('layouts.admin')
   
@section('content')
    <div class="container-fluid ph060">
        @if ($errors->any())
            <div class="alert alert-danger col-12">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('admin.create.banner')}}" method="POST" enctype="multipart/form-data">
            @if(isset($banner))
                <div class="col-md-12 text-right mt20">
                    <button class="btn btn-primary">Editar banner</button>
                </div>
            @else
                <div class="col-md-12 text-right mt20">
                    <button class="btn btn-primary">Criar banner</button>
                </div>
            @endif
            @csrf
            <input name="model" class="hidden" hidden value="{{ isset($model)? $model : $banner->model}}"/>
            <input name="id" value="{{ isset($banner) ? $banner->id : null }}" class="hidden" hidden>
            <div class="row">

                <div class="col-md-7">
                    <div class="file-upload p-0">
                        <div class="image-upload-wrap">
                            <input class="file-upload-input" id="imageUpload" name="image" type='file' onchange="readURL(this);" accept="image/*" />
                            <div class="drag-text">
                                <div class="form-group">
                                    <div class="flex_add_imagem_banner" id="img-preview" style="background-image: url({{ isset($banner->image) ?asset($banner::DEFAULT_IMG_BANNER_DIR)."/".$banner->image : null}});">
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
                        {{-- <div class="file-upload-content">
                            <img class="file-upload-image" src="#" alt="your image" />
                            <div class="image-title-wrap">
                            <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for=" fonte_black_editar">Título</label>
                        <input type="text" name="title" class="form-control" aria-describedby="emailHelp" value="{{ isset($banner) ? $banner->title : null }}" placeholder="Título...">
                        <div class="flex_texto_tamanho">
                            *Tamanho do título: 45 Caracteres
                        </div>
                    </div>
                    <div class="form-group">
                        <label for=" fonte_black_editar">Sub-Título</label>
                        <input type="text" name="sub_titile" value="{{ isset($banner) ? $banner->sub_title : null }}" class="form-control" aria-describedby="emailHelp" placeholder="Sub-Título...">
                        <div class="flex_texto_tamanho">
                            *Tamanho do sub-título: 45 Caracteres
                        </div>
                    </div>
                    <div class="form-group">
                        <label for=" fonte_black_editar">Descrição</label>
                        <input type="text" name="description" value="{{ isset($banner) ? $banner->description : null }}" class="form-control" aria-describedby="emailHelp" placeholder="Descrição...">
                        <div class="flex_texto_tamanho">
                            *Tamanho do descrição: 60 Caracteres
                        </div>
                    </div>
                    <div class="form-group">
                        <label for=" fonte_black_editar">Botão</label>
                        <input type="text" name="button" value="{{ isset($banner) ? $banner->button : null }}" class="form-control" aria-describedby="emailHelp" placeholder="Texto...">
                        <div class="flex_texto_tamanho">
                            *Tamanho do botão: 30 Caracteres
                        </div>
                    </div>
                    <div class="form-group">
                        <label for=" fonte_black_editar">Link do botão</label>
                        <input type="text" name="button_link" value="{{ isset($banner) ? $banner->button_link : null }}" class="form-control" aria-describedby="emailHelp" placeholder="Link...">
                    </div>
                </div>
                
            </div>
        </form>

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
</script>
@endsection
