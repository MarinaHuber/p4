

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


    

	
<h4>Sign up</h4>

@stop

@section('body')

    {{ Form::open(array('url' => '/signup', 'method' => 'POST')) }}
        <div class="content">
            <div class="email">
                {{ Form::label("email", "Email:") }}
                {{ Form::text('email') }}
            </div>
            <div class="username">
                {{ Form::label("username", "Username:") }}
                {{ Form::text("username") }}
            </div>
            <div class="password">              {{ Form::label("password", "Password:") }}
                {{ Form::password('password') }}
            </div>
            <div class="submit">
                {{ Form::submit('Sign Up!', array('class' => 'signup')); }}
            </div>
        </div>
    {{ Form::close() }}

@stop

@section('list')

@stop
