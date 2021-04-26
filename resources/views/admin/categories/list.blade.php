@extends('layouts.admin')
   
@section('content')
    <div class="ajusta_table">
        {{-- {{dd($budget, $budget->getCountBudgetItens(), $budget->products)}} --}}
        <form action="{{route('admin.edit.status.category') }}" method="POST" id="list-categories" enctype="multipart/form-data">
            @csrf
            <table class="table table-striped">
                <thead>
                    <tr class="title_table">
                        <th><input type="checkbox" id="check-all"></th>
                        <th scope="col" colspan="1" class="text-center">DATA CRIAÇÃO</th>
                        <th scope="col" colspan="1">NOME</th>
                        <th scope="col" colspan="1" class="text-center">SUB-CATEGORIAS</th>
                        <th scope="col" colspan="1" class="text-center">STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td ><input type="checkbox"  name="categoryId[]" value="{{ $category->id }}"></td>
                            <td class="text-center" onclick="location.href='{{route('admin.edit.category', [$category->id])}}'">{{ $category->created_at }}</td>
                            <td onclick="location.href='{{route('admin.edit.category', [$category->id])}}'">{{ $category->name }}</td>
                            <td class="text-center"onclick="location.href='{{route('admin.edit.category', [$category->id])}}'">{{ $category->totalChildren() }}</td>
                            <td class="text-center"onclick="location.href='{{route('admin.edit.category', [$category->id])}}'">{{ $category->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <input type="hidden" id="status-input" name="status" value="">
        </form>
        
        @if (Session()->has('success'))
            <div class="alert alert-success col-12">
                {{Session('success')}}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger col-12">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <script>
        window.onload = function(e){
            $('#send-status-form').change(function(){
                $('#status-input').val($(this).val());
                form_submit();
            });

            function form_submit() {
                $('#list-categories').submit();
            }

            $('#check-all').change(function () {
                if($(this).prop("checked")){
                    $('input:checkbox').attr('checked','checked');
                }else {
                    $('input:checkbox').attr('checked', false);
                }
            });
        }
    </script>
@endsection
