@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-4 offset-sm-4 panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title">Register Page</h1>
        </div>
        <div class="panel-body">
            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password_confirmation', 'Confirmation') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('Sign up', ['class' => 'btn btn-info btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
    
    
</div>






@endsection