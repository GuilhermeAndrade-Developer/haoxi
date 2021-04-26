@extends('layouts.admin')

@section('content')
<div>
    <div class="container-fluid ph060">
       
        @if ($errors->any())
            <div class="alert alert-danger col-12">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (Session()->has('success'))
            <div class="alert alert-success col-12">
                {{Session('success')}}
            </div>
        @endif
        <div class="row">
            @foreach ($manuals as $manual)
            <div class="col-md-3 mt20">
                <div class="fundo_box_manuais">
                    <div class="fonte_title_box_manuais">
                        {{$manual->title}}
                    </div>
                    <div class="mt10 text-center padding_box_manuais">
                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, 
                            sed diam nonumy eirmod tempor invidunt ut labore et dolore magna 
                            aliquyam erat, sed diam voluptua.
                        </p>
                    </div>
                    <div class="padding_box_edit_manuais">
                        <div class="fundo_edit_box_manuais">
                            <div class="fonte_arquivo_box_manuais">
                                anestesia.file.pdf
                            </div>
                            <div class="flex_fundo_icon_manuais_box">
                                <a class="link_manuais" href="{{ route('admin.edit.manuals', [$manual->id]) }}">
                                    <div class="fundo_icon_box_manuais" title="Editar">
                                        <i class="las la-pencil-alt icone_box_manuais"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
