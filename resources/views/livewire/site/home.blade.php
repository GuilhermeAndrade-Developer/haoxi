<div>
    <div id="maincarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($banners as $index => $banner)
                @switch($banner->model)
                    @case(1)
                        @include('livewire.site.banners.one')
                        @break
                    @case(2)
                        @include('livewire.site.banners.two')
                        @break
                    @case(3)
                        @include('livewire.site.banners.three')
                    @case(4)
                        @include('livewire.site.banners.four')
                        @break
                    @default
                @endswitch
            @endforeach
        </div>
    </div>
    <a class="carousel-control-prev" href="#maincarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#maincarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
    <div class="container">
        <div class="flex_pai_icon_pos_banner mt20">
            <div class="alinha_icon_pos_banner">
                <i class="las la-recycle f_size_30 icon_pos_banner" ></i>
                <span class="font_light ml10">Responsabilidade Ambiental</span>
            </div>
            <div class="traco_divide d-none d-md-block"></div>
            <div class="alinha_icon_pos_banner mt10mob_pos_banner">
                <i class="las la-tags f_size_30 icon_pos_banner" ></i> 
                <span class="font_light ml10">Referência Em qualidade</span>
            </div>
            <div class="traco_divide d-none d-md-block"></div>
            <div class="alinha_icon_pos_banner mt10mob_pos_banner">
                <i class="las la-headset f_size_30 icon_pos_banner" ></i> 
                <span class="font_light ml10">Orçamento e atendimento online</span>
            </div>
            <div class="traco_divide d-none d-md-block"></div>
            <div class="alinha_icon_pos_banner mt10mob_pos_banner">
                <i class="las la-book-reader f_size_30 icon_pos_banner" ></i> 
                <span class="font_light ml10">Ética e Combate à Corrupção</span>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt40">
            <div class="col-md-12 text-center">
                <span class="f_size_30">Confira nossa variedade de <b class="fonte_blue_title">produtos</b> e <b class="fonte_blue_title">serviços</b></span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="flex_produtos_home mt20">
            <div class="owl-carousel">
                <div class="item flex_1_produtos">
                    @livewire('components.product-box', ['name_products_services' => 'Anestesia'])
                </div>
                <div class="item flex_1_produtos">
                    @livewire('components.product-box', ['name_products_services' => 'Anestesia'])
                </div>
                <div class="item flex_1_produtos">
                    @livewire('components.product-box', ['name_products_services' => 'Anestesia'])
                </div>
                <div class="item flex_1_produtos">
                    @livewire('components.product-box', ['name_products_services' => 'Anestesia'])
                </div>
                <div class="item flex_1_produtos">
                    @livewire('components.product-box', ['name_products_services' => 'Anestesia'])
                </div>
                <div class="item flex_1_produtos">
                    @livewire('components.product-box', ['name_products_services' => 'Anestesia'])
                </div>
                <div class="item flex_1_produtos">
                    @livewire('components.product-box', ['name_products_services' => 'Anestesia'])
                </div>
            </div>
        </div>
        <div class="flex_pai_ver_produtos mt20">
            <div class="botao_ver_todos_home">
                <b>Ver todas as categorias</b>
            </div>
        </div>
    </div>

    <div class="fundo_sobre_nos mt40">
        <div class="container">
            <div class="row alinha_row">
                <div class="col-md-6"> 
                    <img src="{{asset('images/mapa_img.png')}}" class="w_100">
                </div>
                <div class="col-md-6 mt20mob"> 
                    <div class="f_size_30">
                        Sobre a <b class="fonte_blue_title">Haoxi</b>
                    </div>
                    <div class="mt20">
                        <p>
                            Somos uma <b>empresa brasileira</b> que atua no <b>segmento hospitalar</b> fornecendo produtos
                            e serviços nas mais variadas especialidades médicas, com profissionais experientes
                            a Haoxi tem se destacado pela qualidade de seus produtos e preços competitivos.
                        </p>
                    </div>
                    <div class="mt10">
                      <b class="fonte_blue_title">Nossos Produtos:</b>
                    </div>
                    <div class="mt20">
                        <p>
                            Nossos Produtos: Estamos localizados em São Paulo e atendemos 
                            todo território nacional, disponibilizamos produtos nas áreas de Cardiologia,
                            Anestesia, Oxigênio terapia, Resgate e Farmácia. Nossa equipe de vendas
                            é formada por profissionais treinados para atender e orientar na venda 
                            de cada produto, auxiliando na escolha adequada a necessidade e condição
                            de cada cliente.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt40 alinha_row d-none d-md-flex">
            <div class="segundo_bloco_sobre_nos"> 
                <div class="mt10">
                    <b class="fonte_blue_title">Serviços Prestados:</b>
                </div>
                <div class="mt20">
                    <b>Manutenção de equipamentos médicos e hospitalares</b>
                </div>
                <div class="mt20">
                    <p>
                        Executamos serviços de Assistência Técnica com laboratório,
                        completamente equipado para testes e calibração de equipamentos.
                    </p>
                </div>
                <div class="mt20">
                    <p>
                        Nossos técnicos tem a missão de manter e recuperar diversos equipamentos 
                        nacionais ou importados, sempre buscando aumentar a durabilidade dos produtos
                        e seu desempenho, podemos citar ainda que realizamos
                        recuperação de sensores de capnografia e oximetria entre outros serviços.
                    </p>
                </div>
                <div class="mt20">
                    <p>
                        Mais um serviço que a Haoxi fornece é o desenvolvimento e instalação
                        de redes canalizadas, assim como manutenção de redes já existentes.
                    </p>
                </div>
            </div>
            <div class="flex_1_imagem_sobre"> 
                <img src="{{asset('images/servicos_prestados_img.jpg')}}" class="w_100">
            </div>
        </div>
        <div class="alinha_row mt40 d-none d-md-flex">
            <div class="flex_1_imagem_sobre"> 
                <img src="{{asset('images/instalacao_img.jpg')}}" class="w_100">
            </div>
            <div class="terceiro_bloco_sobre_nos"> 
                <div class="mt10">
                    <b class="fonte_blue_title">Instalação e manutenção em rede de gases medicinais:</b>
                </div>
                <div class="mt20">
                    <p>
                        Nosso principal objetivo é estarmos sempre prontos a atender as mais
                        exigentes empresas, para isso estamos constantemente superando nossas
                        próprias metas, investindo em treinamento, formando uma política de
                        conscientização interna onde cada pessoa é peça fundamental, fazendo
                        com que nossa empresa continue sendo sempre uma das melhores opções para
                        quem procura qualidade e atendimento especializado.
                    </p>
                </div>
            </div>
        </div>
        <!-- Mobile -->
        <div class="container d-sm-none">
            <div class="row">
                <div class="col-md-12 mt20">
                    <img src="{{asset('images/servicos_prestados_img.jpg')}}" class="w_100">
                </div>
                <div class="col-md-12">
                    <div class="mt20">
                        <b class="fonte_blue_title">Serviços Prestados:</b>
                    </div>
                    <div class="mt20">
                        <b>Manutenção de equipamentos médicos e hospitalares</b>
                    </div>
                    <div class="mt20">
                        <p>
                            Executamos serviços de Assistência Técnica com laboratório,
                            completamente equipado para testes e calibração de equipamentos.
                        </p>
                    </div>
                    <div class="mt20">
                        <p>
                            Nossos técnicos tem a missão de manter e recuperar diversos equipamentos 
                            nacionais ou importados, sempre buscando aumentar a durabilidade dos produtos
                            e seu desempenho, podemos citar ainda que realizamos
                            recuperação de sensores de capnografia e oximetria entre outros serviços.
                        </p>
                    </div>
                    <div class="mt20">
                        <p>
                            Mais um serviço que a Haoxi fornece é o desenvolvimento e instalação
                            de redes canalizadas, assim como manutenção de redes já existentes.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt20">
                    <img src="{{asset('images/instalacao_img.jpg')}}" class="w_100">
                </div>
                <div class="col-md-12">
                    <div class="mt20">
                        <b class="fonte_blue_title">Instalação e manutenção em rede de gases medicinais:</b>
                    </div>
                    <div class="mt20">
                        <p>
                            Nosso principal objetivo é estarmos sempre prontos a atender as mais
                            exigentes empresas, para isso estamos constantemente superando nossas
                            próprias metas, investindo em treinamento, formando uma política de
                            conscientização interna onde cada pessoa é peça fundamental, fazendo
                            com que nossa empresa continue sendo sempre uma das melhores opções para
                            quem procura qualidade e atendimento especializado.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fundo_bloco_visao">
       <div class="container">
           <div class="row">
               <div class="col-md-4">
                   <div class="alinha_missao">
                        <i class="las la-bullseye fonte_branca_padrao f_size_25"></i>
                        <span class="fonte_branca_padrao ml10"><b>Missão</b></span>
                    </div>
                    <div class="fonte_branca_padrao mt20">
                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, 
                            sed diam nonumy eirmod tempor invidunt ut labore et dolore magna 
                            aliquyam erat, sed diam voluptua. At vero eos et accusam 
                            et justo duo dolores et ea rebum.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="alinha_missao">
                        <i class="las la-eye fonte_branca_padrao f_size_25"></i>
                        <span class="fonte_branca_padrao ml10"><b>Visão</b></span>
                    </div>
                    <div class="fonte_branca_padrao mt20">
                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, 
                            sed diam nonumy eirmod tempor invidunt ut labore et dolore magna 
                            aliquyam erat, sed diam voluptua. At vero eos et accusam 
                            et justo duo dolores et ea rebum.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="alinha_missao">
                        <i class="las la-medal fonte_branca_padrao f_size_25"></i>
                        <span class="fonte_branca_padrao ml10"><b>Valores</b></span>
                    </div>
                    <div class="fonte_branca_padrao mt20">
                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, 
                            sed diam nonumy eirmod tempor invidunt ut labore et dolore magna 
                            aliquyam erat, sed diam voluptua. At vero eos et accusam 
                            et justo duo dolores et ea rebum.
                        </p>
                    </div>
                </div>
           </div>
       </div>
    </div>
    
    <div class="container">
        <div class="row mt80">
            <div class="col-md-12 text-center">
                <span class="f_size_30">As últimas <b class="fonte_blue_title">novidade</b> e <b class="fonte_blue_title">eventos</b></span>
            </div>
        </div>
        <div class="grid_pai_blog mt40">
            @livewire('components.event-box')
            @livewire('components.event-box')
            @livewire('components.event-box')
        </div>
        <div class="row mt20">
            <div class="col-md-12 text-center">
                <div class="alinha_ver_todos">
                    <i class="las la-plus-circle icon_pos_banner"></i>
                    <span class="ml10">Ver tudo</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt40">
            <div class="col-md-12 text-center">
                <span class="f_size_30 fonte_blue_title">
                   <b>Entre em contato conosco</b>
                </span>
            </div>
        </div>
        <div class="row mt40">
            <div class="offset-md-2 col-md-8">
                <div class="fundo_formulario">
                    <form>
                        <div class="flex_inputs_forms">
                            <div class="form-group separa_inputs_forms">
                                <label for="nome"><b>Nome Completo*</b></label>
                                <input type="text" class="input-padrao" id="nome" placeholder="Nome Completo...">
                            </div>
                            <div class="form-group separa_inputs_forms">
                                <label for="email"><b>E-mail*</b></label>
                                <input type="email" class="input-padrao" id="email" placeholder="E-mail...">
                            </div>
                        </div>
                        <div class="flex_inputs_forms mt10">
                            <div class="form-group separa_inputs_forms">
                                <label for="tel"><b>Telefone ou Celular*</b></label>
                                <input type="text" class="input-padrao tel" id="tel" placeholder="Telefone ou Celular...">
                            </div>
                            <div class="form-group separa_inputs_forms">
                                <label for="nomedaempresa"><b>Nome da empresa*</b></label>
                                <input type="text" class="input-padrao" id="nomedaempresa" placeholder="Nome da empresa...">
                            </div>
                        </div>
                        <div class="flex_inputs_forms mt10">
                            <div class="form-group separa_inputs_forms">
                                <div class="form-group">
                                    <label for="assunto"><b>Assunto*</b></label>
                                    <select class="input-padrao" id="assunto">
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>
                                    </select>
                                  </div>
                            </div>
                            <div class="form-group separa_inputs_forms">
                                <div class="form-group">
                                    <label for="arquivo"><b>Deseja enviar um arquivo?</b></label>
                                    <input type="file" class="input-arquivo" id="arquivo" placeholder="Selecionar arquivo...">
                                </div>
                            </div>
                        </div>
                        <div class="flex_inputs_forms mt10">
                            <div class="form-group separa_inputs_forms">
                                <label for="cidade"><b>Cidade*</b></label>
                                <input type="text" class="input-padrao" id="cidade" placeholder="Digite a cidade...">
                            </div>
                            <div class="separa_inputs_forms">
                               
                            </div>
                        </div>
                        <div class="flex_pai_mensagem">
                            <div class="flex_1_menesagem">
                                <b>*Campos obrigatórios</b>
                            </div>
                            <div class="flex_1_menesagem flex_botao_enviar mt20mob">
                                <button type="submit" class="btn btn-primary"><b>Enviar</b></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row mt60 mb60">
            <div class="col-md-12 text-center">
                <div class="f_size_18">
                    Ou ligue em um de nossos canais de atendimento
                </div>
                <div class="fonte_blue_title f_size_30">
                    <b>(11) 5642-0587 - (11) 98196-0159</b>
                </div>
            </div>
        </div>
    </div>
</div>
