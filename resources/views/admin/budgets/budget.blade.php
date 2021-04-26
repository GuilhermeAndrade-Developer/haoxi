@extends('layouts.admin')
   
@section('content')
    <div class="container-fluid ph060">
        <div class="row">
            <div class="col-md-12">
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="title_box_status">
                            <div class="flex_pai_status">
                                <div class="flex_1_status">
                                    <span class="fonte_branca_titulo_bloco">
                                        10/10/2021
                                    </span>
                                </div>
                                <div class="flex_select_satus">
                                   <span class="fonte_branca_titulo_bloco">STATUS</span> 
                                   <form action="{{route('admin.change.status.budget')}}" method="POST" id="form-status">
                                        @csrf
                                        <input class="hidden" hidden value="{{isset($budget)? $budget->id : null }}" name="id">
                                        <select class="ml-2 select_status" id="select-status" name="status">
                                            <option value="1" {{ isset($budget) && $budget->status == 1 ? 'selected' : null }}>Concluído</option>
                                            <option value="2" {{ isset($budget) && $budget->status == 2 ? 'selected' : null }}>Em andamento</option>
                                        </select>
                                   </form>
                                </div>
                            </div>
                        </div>
                        <div class="box_branco_status">
                            <div class="engloba_box_branco_status">
                                <div class="w_label">
                                    <span class="bold_title_box" >NOME</span>
                                </div>
                                <div class="fundo_cinza_copia_e_cola">
                                    <input id="name" class="input-transparent" readonly value="{{ $budget->name }}">
                                    <div class="flex_end_copia_e_cola" onclick="copy('name')">
                                        <i class="las la-copy icone_copia"></i>
                                    </div>
                                </div>   
                            </div>
                            <div class="engloba_box_branco_status">
                                <div class="w_label">
                                    <span class="bold_title_box">CPF/CNPJ</span>
                                </div>
                                <div class="fundo_cinza_copia_e_cola">
                                    <input class="input-transparent" readonly id="cpf_cnpj" value="{{ $budget->cpf_cnpj }}">
                                    <div class="flex_end_copia_e_cola" onclick="copy('cpf_cnpj')">
                                        <i class="las la-copy icone_copia"></i>
                                    </div>
                                </div>   
                            </div>   
                            <div class="engloba_box_branco_status">
                                <div class="w_label">
                                    <span class="bold_title_box">TELEFONE</span>
                                </div>
                                <div class="fundo_cinza_copia_e_cola">
                                    <input class="input-transparent" readonly id="phone" value="{{ $budget->phone }}" >
                                    <div class="flex_end_copia_e_cola" onclick="copy('phone')">
                                        <i class="las la-copy icone_copia"></i>
                                    </div>
                                </div>   
                            </div>  
                            <div class="engloba_box_branco_status">
                                <div class="w_label">
                                    <span class="bold_title_box">E-MAIL</span>
                                </div>
                                <div class="fundo_cinza_copia_e_cola">
                                    <input class="input-transparent" readonly id="email" value="{{$budget->email }}" >
                                    <div class="flex_end_copia_e_cola" onclick="copy('email')">
                                        <i class="las la-copy icone_copia"></i>
                                    </div>
                                </div>   
                            </div>              
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="title_box_status">
                            <span class="fonte_branca_titulo_bloco">
                               PRODUTOS
                            </span>
                        </div>
                        @foreach ($products as $product)
                            <div class="box_branco_produtos"> 
                                <div>
                                    <img src="{{asset('images/produto_1_img.jpg')}}" class="imagem_box_produtos">
                                </div>
                                <div class="ml_20_box">
                                    {{ $product->name }}
                                </div>
                                <div class="flex_quantidade">
                                    <div>Quantidade</div>
                                    <div class="box_cinza_quantidade">
                                        {{ $product->pivot->total }}
                                    </div>
                                </div>
                            </div>
                        @endforeach                  
                    </div>              
                </div>
            </div>
        </div>
    </div>
    <script>
        window.onload = function(e){ 
            $('#select-status').ready(() => {
                $('#select-status').on('change', function() {
                    const form = $('#form-status');
                    form.submit();
                });
            });
        }
        // $(document).ready(function() {
        //     alert('teste');
        
        // })
            
    </script>

    <script src="{{ asset('js/admin/budget.js') }}"></script>
@endsection