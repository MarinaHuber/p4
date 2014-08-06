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


Yay logged in! | <a href='/logout'>Logout here</a>
<br>
<br>


<p class="paragraph">GoodSounds.is addition to your portfolio works best when connected through SoundCloud.</p>


<div id="navbar">
	<h5><a href="/spots">all</a></h5>	
	<h5><a href="/add">add a sound</a></h5>
	<h5><a href="/signup">filter by location</a></h5>
	<h5><a href="/signup">filter by genre</a></h5>
	
</div>




        <iframe width="100%" 
        height="450" 
        scrolling="yes" 
        frameborder="no" 
        src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/91722063&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
        <br>

		<iframe width="100%" 
		height="450" 
		scrolling="yes" 
		frameborder="no" 
		src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/108812456&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
        <br>

        <iframe width="100%" 
        height="450" 
        scrolling="yes" 
        frameborder="no" 
        src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/151894666&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
        <br>
        <iframe width="100%" 
        height="450" 
        scrolling="yes" 
        frameborder="no" 
        src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/149728350&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
@stop

@section('body')

@stop

@section('list')

@stop