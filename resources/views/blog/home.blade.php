@extends('layout.layout')

@section('title')
{{ $param['title'] }}
@endSection

@section('content')
<div class="navigation">
	<nav>
		<ul class="nav">
			<li>
				<a href="{{ route('home') }}">Home</a>
			</li>
			@if (!Auth::check())
			<li>
				<a href="{{ route('login') }}">Sign in</a>
			</li>
			<li>
				<a href="{{ route('register') }}">Sign Up</a>
			</li>
			@endif
			@if (Auth::check())
			<li>
				<a href="{{ route('dashboard') }}">Dashboard</a>
			</li>
			@endif
		</ul>
	</nav>
</div>
@if($param['path'] == 'index')
@include('blog.main.main')
@elseif($param['path'] == 'view')
@include('blog.main.view')
@endif
@endSection