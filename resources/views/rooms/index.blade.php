@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-sm-4 offset-sm-4 offset-sm-3 panel panel-default">
    <div class="panel-heading">
        <h1 class="panel-title">Create Room</h1>
    </div>
    <div class="panel-body">
        {!! Form::model($room, ['route' => 'rooms.store']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Room Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('投稿', ['class' => 'btn btn-info']) !!}
        {!! Form::close() !!}
    </div>
  </div>
    
  </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">見出し１</th>
          <th scope="col">見出し２</th>
          <th scope="col">見出し３</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>項目１</td>
          <td>項目２</td>
          <td>{!! link_to_route('rooms.show','Enter',['id' => $room->id ],['class' => 'btn btn-info']) !!}</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>項目４</td>
          <td>項目５</td>
          <td>項目６</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>項目７</td>
          <td>項目８</td>
          <td>項目９</td>
        </tr>
      </tbody>
    </table>
    
</div>

@endsection