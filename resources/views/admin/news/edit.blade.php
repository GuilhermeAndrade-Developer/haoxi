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
        <div class="row mt20">
            <div class="col-md-12">
                <form action="{{ route('admin.events.update', $event->id) }}"  method="put" enctype="multipart/form-data">
                    @csrf
                    <input name="id" value="{{ isset($event) ? $event->id : null }}" class="hidden" hidden>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" aria-describedby="title" value="{{ isset($event) ? $event->title : null }}" maxlength="100" placeholder="Título..." name="title">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="keywords">Keywords</label>
                                <input type="text" class="form-control" id="keywords" aria-describedby="keywords" value="{{ isset($event) ? $event->keywords : null }}" maxlength="50" placeholder="Keywords..." name="keywords"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <div class="form-group">
                                <label for="summernote">Text</label>
                                <textarea class="form-control summernote" placeholder="Text..." id="summernote" name="text">{{ isset($event) ? $event->text : null}}</textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="submit" class="btn btn-danger">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

<script type="text/javascript">
    window.onload = function(e){ 
        $('.summernote').summernote({
        tabsize: 2,
        height: 300
      });
    }
</script>