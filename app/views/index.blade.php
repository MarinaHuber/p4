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



	{{ Form::open(array('url' => '/signup', 'method' => 'GET')) }}

		{{ sprintf(Form::label('query', '%s'), 'No account? | <a href="/signup">Sign up</a>/Login here:') }}
		<br>
		{{ Form::text('login') }} &nbsp;
		<br>
		<br>
		{{ Form::text('password') }} &nbsp;
		<br>
		<br>
		{{ Form::submit('Login') }}
	
	{{ Form::close() }}	
</div>
@stop

@section('body')

@stop

@section('list')

@stop