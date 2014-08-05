

@extends('_master')

@section('title')
	Welcome to Goodsounds
@stop

@section('header')

@stop

@section('content')
  <div id = 'outer'> 
    <h1><a href='/'><img class='logo' src='<?php echo URL::asset('/images/LogoGoodSounds.jpg'); ?>' alt='GoodSounds Logo'></a>* BETA</h1>
    <br>
    <br>




@stop

@section('body')

    {{ Form::open(array('url' => '/signup', 'method' => 'POST')) }}
    {{ sprintf(Form::label('query', '%s'), 'Sign up') }}
                <br>
        
                {{ Form::label("email", "___Email:") }}
                {{ Form::text('email') }}
                <br>
                <br>
                {{ Form::label("username", "Username:") }}
                {{ Form::text("username") }}
                <br>
                <br>
                {{ Form::label("password", "Password:") }}
                {{ Form::password('password') }}
                <br>
                <br>
            
        
            <div class="submit">
                {{ Form::submit('Sign Up!', array('class' => 'signup')); }}
            </div>
        
    {{ Form::close() }}

@stop

@section('list')

@stop
