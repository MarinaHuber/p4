@extends('_master')

@section('title')
add a new sound
@stop

@section('content')

<div class="content">


	<h1 class="centertext notification">add a new sound</h1>


	{{ Form::open(array('url' => '/add', 'method' => 'POST')) }}

<div class='centertext logo'>
	{{ Form::label('name') }}<br>
	{{ Form::text('title') }}
</div>

<div class='centertext logo'>
	{{ Form::label('address') }}<br>
	{{ Form::text('location') }}
</div>

<div class='centertext logo'>
	{{ Form::label('what is it?') }}<br>
	{{ Form::text('description') }}
</div>
<br>
<div class='centertext'>
	{{ Form::submit('submit') }}
</div>

	{{ Form::close() }}

</div>

@stop