@extends('_master')

@section('title')
	Lorem Ipsum
@stop

@section('content')
	<h2>Check your input...!!!</h2>
	<img src= <?php public_path();?>"/invalid.png"  alt="error" >	
	<br>
	<p style ="text-align:left">	{{ $error_msg }}</p>
@stop