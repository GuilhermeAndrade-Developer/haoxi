@extends('layouts.admin')
   
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h4>{{ $event->title }}</h4>
            <h6 class="mb-2 text-muted">{{ $event->keywords }}</h6>
            <p class="lead"> {{ $event->text }} </p>
        </div>

        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Created at: {{ ($event->created_at) }} </dt>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Last Update: {{ ($event->updated_at) }} </dt>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('admin.events.edit', 'Edit', array($event->id), array('class' => 'btn btn-outline-success')) !!}
                        {!! Html::linkRoute('admin.events.destroy', 'Delete', array($event->id), array('class' => 'btn btn-outline-danger')) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection