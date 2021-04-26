<div class="stick_menu_fundo">
    <div>
        <div class="mt20 text-center icons-menu">
            <img src="{{asset('images/logo_menu_reduzido_icn.png')}}" class="logo_small">
            <img src="{{asset('images/logo_menu_expandido_icn.png')}}" class="logo_big">
        </div>
        <div class="mt20 text-center icons-menu fundo_branco">
            <i class="las la-home icon_stick"></i>
            <label class="menu-side-text">HOME</label>
        </div>
        <div class="mt20 text-center icons-menu fundo_branco">
            <i class="las la-chalkboard icon_stick"></i>
            <label class="menu-side-text" onclick="location.href='{{route('admin.banners')}}'">BANNER PRINCIPAL</label>
        </div>
        <div class="mt20 text-center icons-menu fundo_branco">
            <i class="las la-newspaper icon_stick"></i>
            <label class="menu-side-text">BLOG</label>
        </div>
        <div class="mt20 text-center icons-menu fundo_branco">
            <i class="las la-archive icon_stick"></i>
            <label class="menu-side-text">PRODUTOS</label>
        </div>
        <div class="mt10 text-center icons-menu fundo_branco" onclick="location.href='{{route('admin.list.categories')}}'">
            <i class="las la-sitemap icon_stick"></i>
            <label class="menu-side-text">CATEGORIAS</label>
        </div>
        <div class="mt20 text-center icons-menu fundo_branco" onclick="location.href='{{route('admin.list.budgets')}}'">
            <i class="las la-receipt icon_stick"></i>
            <label class="menu-side-text">ORÇAMENTO</label>
        </div>
        <div class="mt20 text-center icons-menu fundo_branco" onclick="location.href='{{route('admin.manuals')}}'">
            <i class="las la-file-alt icon_stick"></i>
            <label class="menu-side-text">MANUAIS</label>
        </div>
        <div class="mt20 text-center icons-menu fundo_branco">
            <i class="las la-user icon_stick"></i>
            <label class="menu-side-text">DOWNLOADS</label>
        </div>
        <div class="mt20 text-center icons-menu fundo_branco">
            <i class="las la-user-tie icon_stick"></i>
            <label class="menu-side-text">TRABALHE CONOSCO</label>
        </div>
    </div>
    <div class="flex_end_menu_sitck">
        <div class="mt20 text-center icons-menu-final">
            <img src="{{asset('images/usuario.jpeg')}}" class="imagem_usuario_menu">
            <label class="menu-side-text">Alice Campos</label>
        </div>
        <div class="mt20 text-center icons-menu-logout">
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="las la-sign-out-alt icon_stick"></i>
                <label class="menu-side-text">SAIR</label>
            </a>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>
