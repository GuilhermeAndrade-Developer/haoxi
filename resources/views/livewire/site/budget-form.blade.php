<div>
    <div class="bg-form-budget">
        <div class="bg-opacity-form">
            <div class="container-sm">
                <div class="row">
                    <div class="offset-md-3 col-md-9">
                        <div class="title-form-budget">Informe os seus dados para prosseguir com o orçamento</div>
                    </div>
                </div>
                {{-- <form action="" method="POST"> --}}
                    <div class="row align-label-input">
                        <div class="col-md-3">
                            <label for="name" class="label-form-budget">Nome*</label>
                        </div>
                        <div class="col-md-9">                      
                            <input class="input-default" wire:model="name" type="text" name="name" placeholder="Digite o nome…" required=""/>
                        </div> 
                    </div>                           
                    <div class="row align-label-input">
                        <div class="col-md-3">
                            <label for="cpf" class="label-form-budget">CPF ou CNPJ*</label>
                        </div>
                        <div class="col-md-9">
                            <input class="input-default" wire:model="cpf_cnpj" type="text" name="cpf" placeholder="Digite o CPF ou CNPJ…" required=""/>
                        </div>
                    </div>
                    <div class="row align-label-input">
                        <div class="col-md-3">
                            <label for="tel" class="label-form-budget">Telefone*</label>
                        </div>
                        <div class="col-md-9">
                            <input class="input-default" wire:model="phone" type="text" name="tel" placeholder="Digite o telefone…" required=""/>
                        </div>
                    </div>
                    <div class="row align-label-input">
                        <div class="col-md-3">
                            <label for="email" class="label-form-budget">E-mail*</label>
                        </div>
                        <div class="col-md-9">
                            <input class="input-default" wire:model="email" type="text" name="email" placeholder="Digite o e-mail…" required=""/>
                        </div>
                    </div>
                    <div class="observation">*campos obrigatórios</div>
                    <div class="align-btn mt10">
                        <button type="" wire:click="salvar()" class="btn-primary">Enviar</button>
                    </div>
                {{-- </form> --}}
            </div>
        </div>
    </div>
</div>