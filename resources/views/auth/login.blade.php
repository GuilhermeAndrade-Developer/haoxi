@extends('layouts.customlogin')

@section('content')
<div class="fundo_login">
    <div class="box-login">
        
        <div class="login-body">
            <div>
                <img src="{{asset('images/logo_haoxi_login_icn.png')}}" class="w_logo_login">
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row mt20 pai_login">
                   

                    <div class="alinha_login">
                        <i class="las la-envelope icon-size"></i>
                        <input id="email_login" type="email" class="form-login @error('email') is-invalid @enderror" placeholder="Digite seu e-mail..." name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                    <div class="linha_login"></div>
                    @if(Session()->has('error'))
                        <br>
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{Session('error')}}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group row pai_login">
                   

                    <div class="alinha_login">
                        <i class="las la-lock icon-size"></i>
                        <input id="password_login" type="password" class="form-login @error('password') is-invalid @enderror" placeholder="Digite sua senha..." name="password" required autocomplete="current-password">
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            <img src="{{asset('images/esqueci_senha_login_icn.png')}}">
                        </a>
                        @error('password')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="linha_login"></div>
                </div>

               

                <div class="form-group mt40 pai_botao_login">
                    <div>
                        <button type="submit" class="botao_login">
                            <span class="le_entrar">ENTRAR</span>   
                        </button>
                    </div>
                </div>
                <div class="main_rodape_login">
                    © Copyright 2021 <b>CLIXS</b> - Todos os Direitos Reservados
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
