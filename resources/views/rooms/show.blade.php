@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-4 offset-sm-4 offset-sm-3 panel">
      <div class="panel-default">
          <div class="panel-heading">
              <h1 class="panel-title">Room name : {{ $room->name }}</h1>
          </div>
          <div class="panel-body">
              {!! Form::model($chatmessage, ['route' => 'chatmessages.store', $room->id]) !!}
              <div class="form-group col-sm-12">
                  {!! Form::label('content', 'message') !!}
                  {!! Form::text('content', null, ['class' => 'form-control']) !!}
              </div>
              {!! Form::submit('投稿', ['class' => 'btn btn-info']) !!}
              {!! Form::close() !!}
          </div>
      </div>
  </div>
</div>
@endsection