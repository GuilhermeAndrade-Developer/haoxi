@extends('layouts.customlogin')

@section('content')
<div class="fundo_login">
    <div class="box-login">
        
        <div class="login-body">
            <div>
                <img src="{{asset('images/logo_haoxi_login_icn.png')}}" class="w_logo_login">
            </div>

                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row mt20 pai_login">
                           

                            <div class="alinha_login">
                                <i class="las la-envelope icon-size"></i>
                                <input id="email_recovery" type="email" placeholder="Digite seu e-mail..." class="form-login @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                               <!--  @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                            <div class="linha_login"></div>
                        </div>

                        <div class="form-group mt40 pai_botao_login">
                            <div>
                                <button type="submit" class="botao_login">
                                <span class="le_entrar">ENVIAR</span>   
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
</div>
@endsection
