@extends('master')


@section('content')
    <div class="row list-group-item page-title-list div01">Pages List</div>

    @foreach ($pages as $page)
        <a href="pages/{{$page->id}}">
            <div class="row list-group-item page-title-list">
                <div class="col-xs-8">
                    {{ $page->title }}
                </div>
                <div class="col-xs-4">
                    <div><a href="pages/{{ $page->id }}/delete" class="btn btn-danger pull-right">Delete</a> </div>
                </div>
            </div>
        </a>
    @endforeach


    <div class="row list-group-item">
        <form id="form_id" action="pagesstore" method="post">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" name="title" class="form-control" placeholder="Add Page . . .">
                <span class="input-group-btn">
                    <button class="btn btn-default" id="addButton" type="submit">Add</button>
                </span>
            </div>
        </form>
    </div>
@stop