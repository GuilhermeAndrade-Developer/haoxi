<div class="margin-content">
    <div class="container d-none d-md-block">
        <div class="row">
            <div class="col-md-12 text-left">
                <span class="f_size_30">
                    Orçamento
                </span>
            </div>
        </div>
        <div class="flex_pai_orcamento">
            <div class="flex_voltar_orcamento">
                <i class="las la-angle-left mr10 f_size_16"></i>
                <span>Voltar</span>
            </div>
            <div class="flex_limpar_orcamento ml30">
                <i class="las la-trash mr10 f_size_16"></i>
                <span>Limpar Orçamento</span>
            </div>
            <div class="flex_end_botao_add" wire:click="session_put()">
                <div class="botao_adicionar_orcamento">
                    <b>Finalizar o orçamento</b>
                    <div class="flex_end_icon_botao">
                        <i class="las la-angle-right ml10 f_size_16"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="fundo_orcamento_branco">
            <div>
                <img src="{{asset('images/produto_1_img.jpg')}}" class="imagem_produto_orcamento"> 
            </div>
            <div class="ml20">
                {{$product->name}}
            </div>
            <div class="flex_end_botao_add">
                <div class="number-input flex_contador">
                    <span class="mr10">Quantidade</span>
                    <button wire:click="subtract()" ></button>
                    <input class="quantity" min="0" name="quantity" wire:model="total" value="{{$total}}" type="number">
                    <button wire:click="add()" class="plus"></button>
                </div>
                <div class="red_color_trash">
                    <i class="las la-trash-alt ml40 mr10 f_size_25"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile -->
    <div class="container d-sm-none">
        <div class="row">
            <div class="col-md-12 text-left">
                <span class="f_size_30">
                    Orçamento
                </span>
            </div>
        </div>
        <div class="flex_pai_orcamento">
            <div class="flex_voltar_orcamento">
                <i class="las la-angle-left mr10 f_size_16"></i>
                <span>Voltar</span>
            </div>
            <div class="flex_limpar_orcamento ml30">
                <i class="las la-trash mr10 f_size_16"></i>
                <span>Limpar Orçamento</span>
            </div>
        </div>
        <div class="fundo_orcamento_branco">
            <div>
                <div>
                    <img src="{{asset('images/produto_1_img.jpg')}}" class="imagem_produto_orcamento"> 
                </div>
                <div>
                    Máscara inflável
                </div>
                <div class="flex_end_botao_add">
                    <div class="number-input flex_contador">
                        <span class="mr10">Quantidade</span>
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                    </div>
                    <div class="red_color_trash">
                        <i class="las la-trash-alt f_size_25"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex_end_botao_add">
            <div class="botao_adicionar_orcamento">
                <b>Finalizar o orçamento</b>
                <div class="flex_end_icon_botao">
                    <i class="las la-angle-right ml10 f_size_16"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile -->
</div>