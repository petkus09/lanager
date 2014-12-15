@extends('layouts.default')
@section('content')
	@include('layouts.default.title')
	@include('layouts.default.alerts')
	{{ Form::model($event, ['route' => 'events.store', 'class' => 'event-create'] ) }}
		@include('events.partials.form')
	{{ Form::close() }}
@endsection
