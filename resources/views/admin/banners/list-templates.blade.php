@extends('layouts.admin')
   
@section('content')
    <div class="container-fluid ph060">
        <div class="row">
            <div class="col-md-4 mt20">
                <a href="#modelo1" data-toggle="modal" data-target="#modelo1">
                    <div style="background-image: url({{asset('images')."/patient_nurse.jpeg"}});" class="card_banner">
                        <div class="engloba_cards_banners">
                            <div class="overlay_mask">
                                <div>
                                    <i class="las la-eye icon_mask"></i>
                                </div>
                                <div class="fonte_branca_hover_box">
                                    Selecione para ver o template<br>
                                    e criar a partir desse modelo
                                </div>
                            </div>
                            <div class="fonte_titulo_card_banner text-right">
                                Equipamentos Médicos
                            </div>
                            
                            <div class="fonte_titulo2_card_banner text-right">
                                Direto da Fábrica.
                            </div>
                            <div class="fonte_subtitulo_card_banner text-right">
                                Compre com conforto, segurança e comodidade.
                            </div>
                            <div class="flex_botao_banner_box">
                                <div class="botao_card_banner mt10">
                                    Conheça nossos produtos
                                </div>
                            </div>
                        </div>
                        <div class="overlay_mask_fixed"></div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mt20">
                <a data-toggle="modal" data-target="#modelo2">
                    <div style="background-image: url({{asset('images')."/patient_nurse.jpeg"}});" class="card_banner2">
                        <div class="engloba_cards_banners">
                            <div class="overlay_mask">
                                <div>
                                    <i class="las la-eye icon_mask"></i>
                                </div>
                                <div class="fonte_branca_hover_box">
                                    Selecione para ver o template<br>
                                    e criar a partir desse modelo
                                </div>
                            </div>
                            <div class="fonte_titulo_card_banner text-center">
                                Equipamentos Médicos
                            </div>
                            <div class="fonte_titulo2_card_banner text-center">
                                Direto da Fábrica.
                            </div>
                            <div class="fonte_subtitulo_card_banner text-center">
                                Compre com conforto, segurança e comodidade.
                            </div>
                            <div class="flex_botao_banner_box2">
                                <div class="botao_card_banner mt10">
                                    Conheça nossos produtos
                                </div>
                            </div>
                        </div>
                        <div class="overlay_mask_fixed"></div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mt20">
                <a href="#modelo3" data-toggle="modal" data-target="#modelo3">
                    <div style="background-image: url({{asset('images')."/patient_nurse.jpeg"}});" class="card_banner3">
                        <div class="engloba_cards_banners">
                            <div class="overlay_mask">
                                <div>
                                    <i class="las la-eye icon_mask"></i>
                                </div>
                                <div class="fonte_branca_hover_box">
                                    Selecione para ver o template<br>
                                    e criar a partir desse modelo
                                </div>
                            </div>
                            <div class="fonte_titulo_card_banner">
                                Equipamentos Médicos
                            </div>
                            <div class="fonte_titulo2_card_banner">
                                Direto da Fábrica.
                            </div>
                            <div class="fonte_subtitulo_card_banner">
                                Compre com conforto, segurança e comodidade.
                            </div>
                            <div class="flex_botao_banner_box3">
                                <div class="botao_card_banner mt10">
                                    Conheça nossos produtos
                                </div>
                            </div>
                        </div>
                        <div class="overlay_mask_fixed"></div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mt20">
                <a href="#modelo4" data-toggle="modal" data-target="#modelo4">
                    <div style="background-image: url({{asset('images')."/patient_nurse.jpeg"}});" class="card_banner4">
                        <div class="engloba_cards_banners">
                            <div class="overlay_mask">
                                <div>
                                    <i class="las la-eye icon_mask"></i>
                                </div>
                                <div class="fonte_branca_hover_box">
                                    Selecione para ver o template<br>
                                    e criar a partir desse modelo
                                </div>
                            </div>
                            <div class="fonte_titulo_card_banner text-center">
                                Equipamentos Médicos
                            </div>
                            <div class="fonte_subtitulo_card_banner mt10 text-center">
                                Compre com conforto, segurança e comodidade.
                            </div>
                            <div class="flex_botao_banner_box2">
                                <div class="botao_card_banner mt20">
                                    Conheça nossos produtos
                                </div>
                            </div>
                        </div>
                        <div class="overlay_mask_fixed"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    @include('admin.banners.modal')
@endsection


