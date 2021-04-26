
<nav class="navbar navbar-expand-md navbar-light shadow-sm fundo_menu_admin">
    <div class="container-fluid ph060">
        @if (isset($topBar))
            @switch($topBar)
                @case('listBanners')
                    <div class="flex_menu_var">
                        <div class="fonte_menu_var">
                            BANNER PRINCIPAL
                        </div>
                        
                        <div class="flex_end_menu_var">
                            <div>
                                <a href="#modalordenar" data-toggle="modal" data-target="#modalordenar" class="estilo_href_var_menu">
                                    <div class="fundo_botao_branco_menu_var">
                                        ORDENAR BANNERS
                                    </div>
                                </a>
                            </div>
                            <div class="ml_20_var_menu">
                                <a href="{{route('admin.tempaltes.banners')}}" class="estilo_href_var_menu">
                                    <div class="fundo_botao_branco_menu_var">
                                        CRIAR BANNER
                                    </div>
                                </a>
                            </div>
                        </div>
                
                    </div>
                    @break
                @case('createBanner')
                    <div class="flex_menu_var">
                        <div>
                            <a href="{{route('admin.tempaltes.banners')}}">
                                <i class="las la-angle-left icon_voltar_var_menu"></i>
                            </a>
                        </div>
                        <div class="fonte_menu_var ml_40_var_menu">
                            BANNER PRINCIPAL
                        </div>
                        <div class="flex_end_menu_var">
                            <a href="">
                                <i class="las la-save icon_voltar_var_menu"></i>
                            </a>
                        </div>
                    </div>

                    @break
                @case('listTemplatesBanners')
                    <div class="flex_menu_var">
                        <div>
                            <a href="{{route('admin.banners')}}">
                                <i class="las la-angle-left icon_voltar_var_menu"></i>
                            </a>
                        </div>
                        <div class="fonte_menu_var ml_40_var_menu">
                            BANNER PRINCIPAL
                        </div>
                    </div>

                    @break
                @case('EditBanners')
                    <div class="flex_menu_var">
                        <div>
                            <a href="{{route('admin.banners')}}">
                                <i class="las la-angle-left icon_voltar_var_menu"></i>
                            </a>
                        </div>
                        <div class="fonte_menu_var ml_40_var_menu">
                            BANNER PRINCIPAL
                        </div>
                        <div class="flex_end_menu_var">
                            <a href="">
                                <i class="las la-save icon_voltar_var_menu"></i>
                            </a>
                        </div>
                    </div>
                @break
                @case('listBudget')
                    <div class="flex_menu_var">
                        <div class="fonte_menu_var">
                            ORÇAMENTO
                        </div>
                        <div class="flex_end_menu_var">
                            <span class="fonte_branca_titulo_bloco">STATUS</span> 
                            <form action="" method="POST" id="form-status">
                                <input class="hidden" hidden value="" name="id">
                                <select class="ml-2 select_status" id="select-status" name="status">
                                    <option value="1">Concluído</option>
                                    <option value="2">Em andamento</option>
                                </select>
                            </form>
                            <div class="flex_pai_paginacao">
                                <i class="las la-chevron-circle-left icon_voltar_var_menu"></i>
                                <div class="fundo_paginacao">
                                    1
                                </div>
                                <i class="las la-chevron-circle-right icon_voltar_var_menu"></i>
                            </div>
                            <div class="flex_pai_paginacao">
                                <i class="las la-file-export la-rotate-270 icon_voltar_var_menu"></i>
                                <i class="las la-trash-alt icon_voltar_var_menu ml_20_var_menu"></i>
                            </div>
                        </div>
                    </div>
                    @break
                @case('showBudget')
                    <div class="flex_menu_var">
                        <div>
                            <a href="{{route('admin.list.budgets')}}">
                                <i class="las la-angle-left icon_voltar_var_menu"></i>
                            </a>
                        </div>
                        <div class="fonte_menu_var ml_40_var_menu">
                            ORÇAMENTO
                        </div>
                    </div>
                @break
                @case('listCategories')
                    <div class="flex_menu_var">
                        <div class="fonte_menu_var">
                            CATEGORIAS
                        </div>
                        <div class="flex_end_menu_var">
                            <span class="fonte_branca_titulo_bloco">STATUS</span>
                                <input class="hidden" hidden value="" name="id">
                                <select class="ml-2 select_status" id="send-status-form" name="status">
                                    <option value="">--</option>
                                    <option value="ativo">Ativo</option>
                                    <option value="inativo">Inativo</option>
                                </select>

                            <div class="flex_pai_icones_var_menu">
                                <form id="search-form">
                                    <div class="search-box espacamento_var_menu">
                                        <input type ="text" class="txt" name="search" value="{{request()->get('search')}}" onkeydown="if(event.keyCode == 13 || event.which == 13) this.form.submit()" placeholder ="Buscar...">
                                        <a class ="botao_busca" onclick="document.getElementById('search-form').submit()"><i class ="las la-search la-rotate-270 icon_voltar_var_menu"></i></a>
                                    </div>
                                </form>
                                <div class="flex_end_menu_var">
                                    <a href="{{route('admin.create.category')}}" class="estilo_href_var_menu">
                                        <div class="fundo_botao_branco_menu_var">
                                            CRIAR CATEGORIA
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @break
                @case('createCategories')
                    <div class="flex_menu_var">
                        <div class="fonte_menu_var">
                            CATEGORIAS
                        </div>
                        <div class="flex_end_menu_var">
                            <span class="fonte_branca_titulo_bloco">STATUS</span>
                                <input class="hidden" hidden value="" name="id">
                                <select class="ml-2 select_status" id="select-status-top" name="status">
                                    <option value=""> -- </option>
                                    <option value="ativo">Ativo</option>
                                    <option value="inativo">Inativo</option>
                                </select>
                            <div class="flex_pai_icones_var_menu mh_20_icones_topo" id="save-category-form">
                                <i class="las la-save icon_voltar_var_menu"></i>
                            </div>
                        </div>
                    </div>
                @break
                @case('editCategory')
                    <div class="flex_menu_var">
                        <div>
                            <a href="{{route('admin.list.categories')}}">
                                <i class="las la-angle-left icon_voltar_var_menu"></i>
                            </a>
                        </div>
                        <div class="fonte_menu_var ml_40_var_menu">
                            CATEGORIAS
                        </div>
                        <div class="flex_end_menu_var">
                            <span class="fonte_branca_titulo_bloco">STATUS</span> 
                            <form action="" method="POST" id="form-status">
                                <input class="hidden" hidden value="" name="id">
                                <select class="ml-2 select_status" id="select-status" name="status">
                                    <option value="1">Ativo</option>
                                    <option value="2">Inativo</option>
                                </select>
                            </form>
                            <div class="flex_pai_icones_var_menu mh_20_icones_topo">
                                <i class="las la-save icon_voltar_var_menu"></i>
                            </div>
                        </div>
                    </div>
                @break
                @case('listManuals')
                    <div class="flex_menu_var">
                        <div class="fonte_menu_var">
                            MANUAIS E PROCEDIMENTOS
                        </div>
                        
                        <div class="flex_end_menu_var">
                            <a href="{{ route('admin.new.manuals') }}" class="estilo_href_var_menu">
                                <div class="fundo_botao_branco_menu_var">
                                    ADICIONAR
                                </div>
                            </a>
                        </div>
                    </div>
                @break
                @case('createManual')
                    <div class="flex_menu_var">
                        <div>
                            <a href="{{route('admin.manuals')}}" class="estilo_href_var_menu">
                                <i class="las la-angle-left icon_voltar_var_menu"></i>
                            </a>
                        </div>
                        <div class="fonte_menu_var ml_40_var_menu">
                            MANUAIS E PROCEDIMENTOS
                        </div>
                        <div class="flex_end_menu_var">
                            <a href="">
                                <i class="las la-save icon_voltar_var_menu"></i>
                            </a>
                        </div>
                    </div>
                @break
                @case('editManual')
                    <div class="flex_menu_var">
                        <div>
                            <a href="{{route('admin.manuals')}}" class="estilo_href_var_menu">
                                <i class="las la-angle-left icon_voltar_var_menu"></i>
                            </a>
                        </div>
                        <div class="fonte_menu_var ml_40_var_menu">
                            MANUAIS E PROCEDIMENTOS
                        </div>
                        <div class="flex_end_menu_var">
                            <a href="">
                                <i class="las la-save icon_voltar_var_menu"></i>
                            </a>
                        </div>
                    </div>
                @break
                @case('listWorkUs')
                    <div class="flex_menu_var">
                        <div class="fonte_menu_var">
                            TRABALHE CONOSCO
                        </div>
                        <div class="flex_end_menu_var">
                            <div class="search-box">
                                <input type="text" class="txt" placeholder="Buscar...">
                                <a class="botao_busca">
                                    <i class="las la-search la-rotate-270 icon_voltar_var_menu"></i>
                                </a>
                            </div>
                            <div class="flex_pai_paginacao">
                                <i class="las la-chevron-circle-left icon_voltar_var_menu"></i>
                                <div class="fundo_paginacao">
                                    1
                                </div>
                                <i class="las la-chevron-circle-right icon_voltar_var_menu"></i>
                            </div>
                        </div>
                    </div>
                @break
                @case('dashboard')
                    <div class="flex_menu_var">
                        <div class="fonte_menu_var">
                            HOME - DASHBOARD
                        </div>
                    </div>
                @break
                @default
            @endswitch
        @endif
    </div>
</nav>

<div class="modal fade" id="modalordenar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content fundo_modal_ordenar">
            <div class="flex_modal_ordenar">
                <div class="flex_titulo_ordenar">
                    ORDENAR BANNERS
                </div>
                <div class="div_fechar_modal_ordenar">
                    <button type="button" class="close fecha_modal_ordenar" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="mt10">
                <div class="flex_box_modal_ordenar">
                    <div>
                        1
                    </div>
                    <div class="ml_40_var_menu">
                        EQUIPAMENTOS MÉDICOS DIRETO DA FÁBRICA.
                    </div>
                    <div class="flex_bars_modal_ordenar">
                        <i class="las la-bars icon_voltar_var_menu"></i>
                    </div>
                </div>
                <div class="flex_box_modal_ordenar">
                    <div>
                        1
                    </div>
                    <div class="ml_40_var_menu">
                        EQUIPAMENTOS MÉDICOS DIRETO DA FÁBRICA.
                    </div>
                    <div class="flex_bars_modal_ordenar">
                        <i class="las la-bars icon_voltar_var_menu"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<style>

    .flex_menu_var{
        display: flex; 
        align-items: center;
        width: 100%;
    }
    .fonte_menu_var{
        color: #fff;
    }
    .flex_end_menu_var{
        display: flex; 
        align-items: center; 
        justify-content: flex-end; 
        flex: 1;
    }
    .fundo_botao_branco_menu_var{
        background-color: #fff;
        display: flex; 
        align-items: center; 
        padding: 6px 20px; 
        color: #027EBC; 
        font-weight: 500; 
        border-radius: 5px;
    }
    a.estilo_href_var_menu:link{
        text-decoration: none;
    }
    .ml_40_var_menu{
        margin-left: 40px;
    }
    .ml_20_var_menu{
        margin-left: 20px;
    }
    .icon_voltar_var_menu{
        color: #fff; 
        font-size: 25px;
    }
    .flex_pai_paginacao{
        display: flex; 
        align-items: center; 
        margin-left: 30px;
    }
    .flex_pai_icones_var_menu{
        display: flex; 
        align-items: center; 
        
    }
    .fundo_paginacao{
        display: flex; 
        align-items: center; 
        background-color: #fff; 
        padding: 2px 9px; 
        color: #027EBC; 
        margin: 0px 10px;
    }
    .espacamento_var_menu{
        margin: 0 20px;
    }
    .mh_20_icones_topo{
        margin: 0 20px;
    }


    /* Campo de Busca */

    .search-box:hover > .txt{
        width:300px;
        padding:0 6px;
        transition: all 1s;
        background:#fff;
        border-radius: 5px;
    
    }
    .botao_busca{
        width:40px;
        height:40px;
        display:flex;
        justify-content:center;
        align-items:center;
        transition:0.4s;
        cursor:pointer;
        
        
    }
    .botao_busca > i{
        font-size:25px;
        color:#fff;
        
    }
    a.botao_busca:hover{
        text-decoration: none;
        color: transparent;
        outline:none;
    }
    
    .txt{
        border:none;
        background:none;
        outline:none;
        float:left;
        padding:0;
        color:#333;
        font-size:16px;
        transition:0.4s;
        line-height:40px;
        width:0px;
        font-weight:normal;
    }
    /* Campo de Busca */

   /*  Modal Ordenar */
    .fecha_modal_ordenar{
        color: #000;
    }
    .modal-content.fundo_modal_ordenar{
        border-radius: initial;
        padding: 10px 40px;
        height: 500px;
        overflow-x: auto;
    }
    button.close.fecha_modal_ordenar{
        position: absolute;
        top: -1px;
        right: 5px;
        font-weight: 100;
        font-size: 40px;
        color: #828282;
        opacity: 0.75;
    }
    button.close.fecha_modal_ordenar:hover{
        color: #828282;
        opacity: 0.75;
    }
    .flex_modal_ordenar{
        display: flex;
    }
    .flex_titulo_ordenar{
        display: flex; 
        align-items: center; 
        justify-content: center; 
        flex: 1; 
        color: #027EBC
    }
    .div_fechar_modal_ordenar{
        display: flex; 
        justify-content: flex-end;
    }
    .flex_box_modal_ordenar{
        background-color: #027EBC; 
        display: flex; 
        align-items: center; 
        color: #fff; 
        padding: 10px; 
        margin-top: 10px; 
        border-radius: 5px;
    }
    .flex_bars_modal_ordenar{
        display: flex; 
        justify-content: flex-end; 
        flex: 1;
    }



    /*  Modal Ordenar */


</style>