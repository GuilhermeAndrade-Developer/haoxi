@extends('layouts.admin')
   
@section('content')
    <div class="container-fluid ph060">
        @if (Session()->has('success'))
            <div class="alert alert-success col-12">
                {{Session('success')}}
            </div>
        @endif
        
        <div class="row">
            @foreach ($banners as $banner)
            <div class="col-md-4 mt20">
                <div style="background-image: url({{asset($banner::DEFAULT_IMG_BANNER_DIR)."/".$banner->image}});" class="
                    @if($banner->model == 1)
                        {{'card_banner'}}
                    @elseif($banner->model == 2)
                        {{'card_banner2'}}
                    @elseif($banner->model == 3)
                        {{'card_banner3'}}
                    @elseif($banner->model == 4)
                        {{'card_banner4'}}
                    @endif
                    ">
                    <div class="engloba_cards_banners">
                        <div class="fonte_titulo_card_banner">
                            {{ isset($banner) ? $banner->title : null }}
                        </div>
                        <div class="fonte_titulo2_card_banner">
                            {{ isset($banner) ? $banner->sub_title : null }}
                        </div>
                        <div class="fonte_subtitulo_card_banner">
                            {{ isset($banner) ? $banner->description : null }}
                        </div>
                        @if(isset($banner->button) && !empty($banner->button))
                            <div class="flex_botao_banner_box3">
                                <div class="botao_card_banner mt10">
                                    {{ isset($banner) ? $banner->button : null }}
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="icons_superiores_box">
                            
                            <div class="fundo_branco_box_list mr_5_box" data-toggle="modal" data-target="#modelo{{$banner->model}}" data-image="{{asset($banner::DEFAULT_IMG_BANNER_DIR)."/".$banner->image}}" data-title="{{ isset($banner) ? $banner->title : null}}" data-subtitle="{{ isset($banner) ? $banner->sub_title : null}}" data-description="{{ isset($banner) ? $banner->description : null}}" data-button="{{ isset($banner) ? $banner->button : null}}"
                                >
                                <i class="las la-eye fonte_icon_superior_box"></i>
                            </div>
                        {{-- @if($banner->model == 1)
                            
                        @elseif($banner->model == 2)
                            <div class="fundo_branco_box_list mr_5_box" data-toggle="modal" data-target="#modelo2" data-image="{{asset($banner::DEFAULT_IMG_BANNER_DIR)."/".$banner->image}}"
                            >
                                <i class="las la-eye fonte_icon_superior_box"></i>
                            </div>
                        @elseif($banner->model == 3)
                            <div class="fundo_branco_box_list mr_5_box" data-toggle="modal" data-target="#modelo3" data-image="{{asset($banner::DEFAULT_IMG_BANNER_DIR)."/".$banner->image}}"
                            >
                                <i class="las la-eye fonte_icon_superior_box"></i>
                            </div>
                        @elseif($banner->model == 4)
                            <div class="fundo_branco_box_list mr_5_box" data-toggle="modal" data-target="#modelo3" data-image="{{asset($banner::DEFAULT_IMG_BANNER_DIR)."/".$banner->image}}"
                            >
                                <i class="las la-eye fonte_icon_superior_box"></i>
                            </div>
                        @endif --}}
                        
                        <a href="{{route('admin.edit.banner', [$banner->model, $banner->id])}}">
                            <div class="fundo_branco_box_list" title="Editar">
                                <i class="las la-pencil-alt fonte_icon_superior_box"></i>
                            </div>
                        </a>
                        <a href="#modaldelete"data-toggle="modal" data-target="#modaldelete" data-url="{{ route('admin.delete.banner', [$banner->id])}}">
                            <div class="fundo_branco_box_list ml_5_box" title="Deletar">
                                <i class="las la-times fonte_icon_superior_box"></i>
                            </div>
                        </a>
                    </div>
                    <div class="overlay_mask_fixed"></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modaldelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content fundo_modal_padrao">
            <div>
                <div class="text-center">
                    <span class="title_modal_padrao">
                        Aviso!
                    </span>
                </div>
            </div>
            <div class="mt20 text-center">
                <span class="descr_modal_padrao">
                    Você tem certeza que<br>deseja deletar o banner?
                </span>
            </div>
            <div class="alinha_botoes_modal_padrao mt20 text-center">
                <a href="" data-dismiss="modal" class="estilo_link_modal_padrao">
                    <div class="botao_nao_modal_padrao">
                        <span>NÃO</span>
                    </div>
                </a>
                <a href="{{route('admin.delete.banner', [0])}}" class="estilo_link_modal_padrao" id="btn-dele-banner">
                    <div class="botao_sim_modal_padrao">
                        <span>SIM</span>
                    </div>
                </a>
            </div>
        </div>
        </div>
    </div>
    @include('admin.banners.modal')
    <script>
        window.onload = function(e){
            $('#modaldelete').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);
                var url = button.data('url');
                var modal = $(this);
                modal.find('#btn-dele-banner').attr('href', url);
                console.log(url);
            });
            $('#modelo1').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);
                var url         = button.data('image');
                var title       = button.data('title');
                var subtitle    = button.data('subtitle');
                var description = button.data('description');
                var button      = button.data('button');
                
                change_modal($(this), url, title, subtitle, description, button);
            });
            $('#modelo2').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);
                var url         = button.data('image');
                var title       = button.data('title');
                var subtitle    = button.data('subtitle');
                var description = button.data('description');
                var button      = button.data('button');
                
                change_modal($(this), url, title, subtitle, description, button);
            });
            $('#modelo3').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);
                var url         = button.data('image');
                var title       = button.data('title');
                var subtitle    = button.data('subtitle');
                var description = button.data('description');
                var button      = button.data('button');
                
                change_modal($(this), url, title, subtitle, description, button);
            });
            $('#modelo4').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);
                var url         = button.data('image');
                var title       = button.data('title');
                var subtitle    = button.data('subtitle');
                var description = button.data('description');
                var button      = button.data('button');
                
                change_modal($(this), url, title, subtitle, description, button);
            });
            function change_modal(modal, url, title, subtitle, description, button) {
                modal.find('.modal-content').css('backgroundImage',`url(${url})`);
                modal.find('.fonte_titulo_card_modal ').text(title);
                modal.find('.fonte_titulo2_card_modal').text(subtitle);
                modal.find('.fonte_subtitulo_card_modal ').text(description);
                if(button === "") {
                    modal.find('.flex_botao_banner_box').attr('hidden', 'true');
                }
                modal.find('.botao_card_modal').text(button);
            }
        }
        </script>
@endsection

