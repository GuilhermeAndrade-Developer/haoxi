@extends('layouts.admin')
   
@section('content')


<div class="ajusta_table">
    <table class="table table-striped">
        <thead>
            <tr class="title_table">
                <th><input type="checkbox"></th>
                <th scope="col" colspan="1" class="text-center">DATA</th>
                <th scope="col" colspan="1">NOME</th>
                <th scope="col" colspan="1">GÊNERO</th>
                <th scope="col" colspan="1" class="text-center">TELEFONE</th>
                <th scope="col" colspan="1" class="text-center">DATA DE NASC.</th>
                <th scope="col" colspan="1">E-MAIL</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="checkbox"></td>
                <td class="text-center">
                    10/10/2021
                </td>
                <td>Felipe castanhari</td>
                <td>Masculino</td>
                <td class="text-center">(11) 9 5684-5616</td>
                <td class="text-center">10/10/2021</td>
                <td>felipe@gmail.com</td>
            </tr>
        </tbody>
    </table>
</div>




@endsection