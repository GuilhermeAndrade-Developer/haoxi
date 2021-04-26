<div>
    <div class="bg-form-catalog">
        <div class="bg-opacity-form">
            <div class="container">
                <div class="row">
                    <div class="offset-md-3 col-md-9">
                        <div class="title-form-budget">Crie sua conta</div>
                    </div>
                </div>
                @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="row align-label-input">
                        <div class="col-md-3">
                            <label for="name" class="label-form-budget">Nome*</label>
                        </div>
                        <div class="col-md-9">
                            <input class="input-default" type="text" name="name" value="{{ old('name') }}" placeholder="Digite o nome…" required=""/>
                        </div>
                    </div>
                    <div class="row align-label-input">
                        <div class="col-md-3">
                            <label for="genre" class="label-form-budget">Gênero*</label>
                        </div>
                        <div class="col-md-9">
                            <select class="input-default" name="gender" required="">
                                <option value="Masculino" {{ (old("gender") == 'Masculino' ? "selected":"") }}>Masculino</option>
                                <option value="Feminino" {{ (old("gender") == 'Feminino' ? "selected":"") }}>Feminino</option>
                                <option value="Indefinido"{{ (old("gender") == 'Indefinido' ? "selected":"") }}>Indefinido</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-label-input">
                        <div class="col-md-3">
                            <label for="tel" class="label-form-budget">Telefone*</label>
                        </div>
                        <div class="col-md-9">
                            <input class="input-default" type="text" name="phone" value="{{ old('phone') }}"placeholder="Digite o telefone…" required=""/>
                        </div>
                    </div>
                    <div class="row align-label-input">
                        <div class="col-md-3">
                            <label for="birthday" class="label-form-budget">Data de Nascimento*</label>
                        </div>
                        <div class="col-md-9">
                            <input class="input-default" type="text" name="birthday" value="{{ old('birthday') }}"placeholder="Digite o e-mail…" required=""/>
                        </div>
                    </div>
                    <div class="row align-label-input">
                        <div class="col-md-3">
                            <label for="email" class="label-form-budget">E-mail*</label>
                        </div>
                        <div class="col-md-9">
                            <input class="input-default" type="text" name="email" value="{{ old('email') }}"placeholder="Digite o e-mail…" required=""/>
                        </div>
                    </div>
                    <div class="row align-label-input">
                        <div class="col-md-3">
                            <label for="password" class="label-form-budget">Senha*</label>
                        </div>
                        <div class="col-md-9">
                            <input class="input-default" type="text" name="password" placeholder="Digite a senha…" required=""/>
                        </div>
                    </div>
                    <div class="row align-label-input">
                        <div class="col-md-3">
                            <label for="confirm-password" class="label-form-budget">Confirme a senha*</label>
                        </div>
                        <div class="col-md-9">
                            <input class="input-default" type="text" name="password_confirmation" placeholder="Digite a senha…" required=""/>
                        </div>
                    </div>
                    <div class="observation">*campos obrigatórios</div>
                    <div class="align-btn mt40">
                        <button type="submit" class="btn-account">Criar uma conta</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
