@extends('layouts.masterlayout')

@section('content')

	<h1>Hello Laravel</h1>
	<p class="lead">This basic tutorial about CRUD for Task model with Laravel.</p>
	<hr>

	<a href="{{ url('tasks') }}" class="btn btn-info">View Tasks</a>
	<a href="{{ url('tasks/create') }}" class="btn btn-primary">Add New Task</a>

@stop