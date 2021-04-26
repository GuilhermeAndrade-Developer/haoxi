@extends('layouts.admin')
   
@section('content')
    <div class="ajusta_table">
        <table class="table table-striped">
            <thead>
                <tr class="title_table">
                    <th><input type="checkbox"></th>
                    <th scope="col" colspan="1" class="text-center">STATUS</th>
                    <th scope="col" colspan="1" class="text-center">DATA</th>
                    <th scope="col" colspan="1">NOME</th>
                    <th scope="col" colspan="1" class="text-center">CPF/CNPJ</th>
                    <th scope="col" colspan="1" class="text-center">TELEFONE</th>
                    <th scope="col" colspan="1">E-MAIL</th>
                    <th scope="col" colspan="1" class="text-center">QTD. PRODUTOS</th>
                </tr>
                
            </thead>
            <tbody>
                @foreach ($budgets as $budget)
                    <tr>
                        <td><input type="checkbox"></td>
                        <td class="text-center" onclick="location.href='{{route('admin.budget', $budget->id)}}'">
                            @switch($budget->status)
                                @case(1)
                                    {{'RECEBIDO'}}
                                    @break
                                @case(2)
                                    {{'EM ANDAMENTO'}}
                                    @break
                                @case(3)
                                    {{'CONCLUÍDO'}}
                                    @break
                                @default
                                    
                            @endswitch
                        </td>
                        <td class="text-center" onclick="location.href='{{route('admin.budget', $budget->id)}}'">{{ $budget->created_at }}</td>
                        <td onclick="location.href='{{route('admin.budget', $budget->id)}}'">{{ $budget->name }}</td>
                        <td class="text-center" onclick="location.href='{{route('admin.budget', $budget->id)}}'">{{ $budget->cpf_cnpj }}</td>
                        <td class="text-center" onclick="location.href='{{route('admin.budget', $budget->id)}}'">{{ $budget->phone }}</td>
                        <td onclick="location.href='{{route('admin.budget', $budget->id)}}'">{{ $budget->email}}</td>
                        <td class="text-center">{{ $budget->getCountBudgetItens() }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
