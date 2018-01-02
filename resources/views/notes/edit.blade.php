@extends('master')

@section('content')


    <div class="row list-group-item-info page-title">
        <div class="col-xs-12">
            Edit Note........
        </div>
    </div>


<div class="row list-group-item">
    <form method="POST" action="update">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" name="text" value="{{$note->text}}" class="form-control" placeholder="Add Note . . .">
            <span class="input-group-btn">
            <button class="btn btn-default" type="submit">Edit</button>
            <a href="#" class="btn btn-danger" >Cancle</a>
          </span>
        </div>
    </form>
</div>

@stop