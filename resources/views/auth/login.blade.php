@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-4 offset-sm-4 panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title">Login Page</h1>
        </div>
        <div class="panel-body">
            {!! Form::open(['route' => 'login.post']) !!}
                
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('Login', ['class' => 'btn btn-info btn-block']) !!}
            {!! Form::close() !!}
                
            </form>
        </div>
    </div>
    
    
</div>






@endsection