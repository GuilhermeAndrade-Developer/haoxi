@extends('layouts.admin')
   
@section('content')
    <div class="ajusta_table">
        {{-- {{dd($budget, $budget->getCountBudgetItens(), $budget->products)}} --}}
        <table class="table table-striped">
            <thead>
                <tr class="title_table">
                    <th><input type="checkbox"></th>
                    <th scope="col" colspan="1" class="text-center">DATA ADIÇÃO</th>
                    <th scope="col" colspan="1" class="text-center">NOME</th>
                    <th scope="col" colspan="1" class="text-center">DESCRIÇÂO</th>
                    <th scope="col" colspan="1" class="text-center">CATEGORIA</th>
                    <th scope="col" colspan="1" class="text-center">STATUS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td ><input type="checkbox"></td>
                        <td class="text-center" onclick="location.href='{{route('admin.edit.product', [$product->id])}}'">{{ $product->created_at }}</td>
                        <td class="text-center" onclick="location.href='{{route('admin.edit.product', [$product->id])}}'">{{ $product->name }}</td>
                        <td class="text-center" onclick="location.href='{{route('admin.edit.product', [$product->id])}}'">{{ $product->description }}</td>
                        {{-- <td class="text-center"onclick="location.href='{{route('admin.edit.product',  [$product->id])}}'">{{ $product->totalChildren() }}</td> --}}
                        <td class="text-center" onclick="location.href='{{route('admin.edit.product', [$product->id])}}'">{{ $product->category }}</td>
                        <td class="text-center"onclick="location.href='{{route('admin.edit.product',  [$product->id])}}'">{{ $product->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
       
        
        @if (Session()->has('success'))
            <div class="alert alert-success col-12">
                {{Session('success')}}
            </div>
        @endif
    </div>
@endsection
