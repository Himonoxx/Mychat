@extends('layouts.app')

@section('content')

<div="row">
    <div class="col-sm-6 offset-sm-3 panel">
        <div class="panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">Post Messages</h1>
            </div>
            <div class="panel-body">
                {!! Form::model($message, ['route' => 'messages.store']) !!}
                <div class="form-group">
                    {!! Form::label('content', 'Message') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <div class="col-sm-10 offset-sm-1 panel">
        <div class="panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">Mychat</h1>
            </div>
            <div class="panel-body">
                <ul>
                    @foreach($messages as $message)
                        <li>{{ $message->content }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection