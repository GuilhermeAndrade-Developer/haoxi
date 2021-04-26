<div class="margin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="grid_mosaico">
                    <div class="imagem_mosaico">  
                        <img src="{{asset('images/produto_1_img.jpg')}}"> 
                    </div>
                    <div class="imagem_mosaico">  
                        <img src="{{asset('images/produto_desque_1_img.jpg')}}"> 
                    </div>
                    <div class="imagem_mosaico">  
                        <img src="{{asset('images/produto_desque_2_img.jpg')}}"> 
                    </div>
                    <div class="imagem_mosaico">  
                        <img src="{{asset('images/produto_desque_3_img.jpg')}}"> 
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-left mt20mob">
                <div class="f_size_30">
                    Máscara inflável
                </div>
                <div class="mt10">
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                     eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                    At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
                    no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
                    consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                    invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
                    At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gu</p>
                    <p>uo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est 
                    Lorem ipsum dolor sit amet</p>
                </div>
                <div class="number-input mt20 flex_contador">
                    <span class="mr10">Quantidade</span>
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                </div>
                <div class="form-group mt20">
                    <label for="observacao">Observação:</label>
                    <textarea class="form-control" id="observacao" rows="3" placeholder="Digite aqui a observação..."></textarea>
                </div>
                <div class="botao_add_orcamento">
                    <b>Adicionar ao orçamento</b>
                </div>
                <div class="flex_social_share">
                    <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" 
                        data-width="" data-layout="button" data-action="like" data-size="large" data-share="true">
                    </div>
                    <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button"
                        data-show-count="false" data-size="large">Tweetar
                    </a>
                </div>
            </div>
        </div>
        <div class="row mt60">
            <div class="col-md-12 text-center">
                <div class="f_size_30">
                    Produtos <b class="fonte_blue_title">Relacionados</b> 
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="grid-products-services mt30">
            @livewire('components.card-product')
            @livewire('components.card-product')
            @livewire('components.card-product')
            @livewire('components.card-product')
        </div>
    </div>
</div>