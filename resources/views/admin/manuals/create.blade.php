@extends('layouts.admin')

@section('content')
<div>
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger col-12">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row mt20">
            <div class="col-md-12">
                <form action="{{ route('admin.create.manuals') }}"  method="post" enctype="multipart/form-data">
                    @csrf
                    <input name="id" value="{{ isset($manual) ? $manual->id : null }}" class="hidden" hidden>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Titulo</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ isset($manual) ? $manual->title : null }}" maxlength="50" placeholder="Título..." name="title">
                                <div class="div_tamanho_manuais">
                                    *Tamanho do título: 50 Caracteres
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Documento</label>
                                <div class="input-group">
                                    <input type="text" class="form-control read_color border-right-0" placeholder="Adicione um documento" readonly>
                                    <div class="flex_custom_input_manuais border border-left-0 rounded-right">
                                        <span class="fileUpload">
                                            <i class="las la-paperclip icon_anexo_manuais"></i>
                                            <span class="upl" id="upload"></span>
                                            <input type="file" name="document" class="upload up" id="up" />
                                        </span><!-- btn-orange -->
                                    </div><!-- btn -->
                                </div><!-- group -->
                            </div><!-- form-group -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Descrição</label>
                                <textarea class="form-control" maxlength="180" placeholder="Descrição..." id="exampleFormControlTextarea1" class="" rows="3" name="description">{{ isset($manual) ? $manual->description : null}}</textarea>
                                <div class="div_tamanho_manuais">
                                    *Tamanho da descrição: 180 Caracteres
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection



<script>
     window.onload = function(e){ 
        $(document).on('change','.up', function(){
        var names = [];
        var length = $(this).get(0).files.length;
        for (var i = 0; i < $(this).get(0).files.length; ++i) {
            names.push($(this).get(0).files[i].name);
        }
        // $("input[name=file]").val(names);
        if(length>2){
        var fileName = names.join(', ');
        $(this).closest('.form-group').find('.form-control').attr("value",length+" files selected");
        }
        else{
        $(this).closest('.form-group').find('.form-control').attr("value",names);
        }
        });
    }
    
</script>