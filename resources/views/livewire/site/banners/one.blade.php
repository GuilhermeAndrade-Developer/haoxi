<div class="carousel-item {{$index == 0? 'active': null}}">  
    <div class="fundo_carousel" style="background-image: url({{asset('banner/images')."/".$banner->image}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="f_size_40 fonte_branca_padrao">
                        <b>{{isset($banner->title) ? $banner->title : null}}</b>
                    </div>
                    <div class="f_size_40 fonte_branca_padrao">
                        <b>{{isset($banner->sub_title) ? $banner->sub_title : null}}</b>
                    </div>
                    <div class="f_size_18 fonte_branca_padrao">
                        {{isset($banner->description) ? $banner->description : null}}
                    </div>
                    
                    @if(isset($banner->button) && !empty($banner->button))
                        <div class="botao_nossos_produtos mt20" @if(isset($banner->button_link) && !empty($banner->button_link)) onclick="location.href='{{isset($banner->button_link) ? $banner->button_link : null}}'" @endif>
                            <b>{{isset($banner->button) ? $banner->button : null}}</b>
                        </div>
                    @endif
                </div>  
            </div>                   
        </div>
    </div>
</div>
