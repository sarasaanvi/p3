@extends('_master')

@section('title')
	Random Users
@stop


@section('content')
	<h2>Your Users are here...!!!</h2>
	@foreach ($users_data as $user_data)
		<p>
			Name : {{ $user_data->name }}
			<br>
			Address : {{ $user_data->address }}
			<br>
			Text : {{ $user_data->text }}
			<br>
		</p>
	@endforeach

@stop