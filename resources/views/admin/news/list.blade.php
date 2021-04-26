@extends('layouts.admin')
   
@section('content')
<div>
    <div class="container-fluid ph060">
        <div class="col-12 text-right mt20">
            <a class="btn btn-primary" href="{{ route('admin.events.create') }}" >Create</a>
        </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-bordered">
                        <th class="text-center font-weight-bold">Id</th>
                        <th class="text-center font-weight-bold">Date</th>
                        <th class="text-center font-weight-bold">Title</th>
                        <th class="text-center font-weight-bold">Keywords</th>
                        <th class="text-center font-weight-bold">Text</th>
                        <th class="text-center font-weight-bold">Actions</th>
                        <tbody>
                            @foreach($event as $events)
                            <tr>
                                <a href="{{ route('admin.events.index') }}"></a>
                                <td class="text-center align-middle">{{ $events->id }}</td>
                                <td class="align-middle">{{ date ('j, M Y H:i',strtotime($events->created_at)) }}</td>
                                <td class="align-middle">{{ $events->title }}</td>
                                <td class="align-middle">{{ Str::substr($events->keywords, 0, 50)}}{{ Str::length($events->keywords) > 50 ? "..." : "" }}</td>
                                <td class="align-middle">{{ Str::substr($events->text, 0, 50) }}{{ Str::length($events->text) > 50 ? "..." : "" }} </td>
                                <td  class="btn-group">
                                    <a href="{{ route('admin.events.show', $events->id) }}" class="btn btn-outline-primary">View</a>
                                    <a href="{{ route('admin.events.edit', $events->id) }}" class="btn btn-outline-success">Edit</a>
                                    <form href="{{ route('admin.events.destroy', $events->id) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <input class="btn btn-outline-danger" type="submit" value="Delete">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


    

@endsection