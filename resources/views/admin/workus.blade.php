@extends('layouts.admin')
   
@section('content')
<div class="ajusta_table">
    <table class="table table-striped">
        <thead>
            <tr class="title_table">
                <th><input type="checkbox"></th>
                <th scope="col" colspan="1" class="text-center">DATA</th>
                <th scope="col" colspan="1">NOME</th>
                <th scope="col" colspan="1">E-MAIL</th>
                <th scope="col" colspan="1" class="text-center">TELEFONE</th>
                <th scope="col" colspan="1">MENSAGEM</th>
                <th scope="col" colspan="1" class="text-center w_100_table_work">CURRICULO</th>
                <th scope="col" colspan="1" class="text-center"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($works as $work)
            <tr>
                <td><input type="checkbox"><a href="{{ route('admin.workus') }}"></a></td>
                <td class="text-center">
                    {{ $work->created_at }}
                </td>
                <td>{{ $work->name }}</td>
                <td>{{ $work->email_address }}</td>
                <td class="text-center">{{ $work->phone }}</td>
                <td>{{ $work->message }}</td>
                <td class="text-center w_100_table_work">
                    <div class="botao_baixar_table">
                        BAIXAR
                    </div>
                </td>
                <td class="text-center">
                    <i class="las la-trash-alt lixeira_table_work"></i>
                </td> 
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection



