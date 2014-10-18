@extends('_master')

@section('content')
	<h2>Lorem Ipsum Generator</h2>
	<p>	
		In publishing and graphic design, lorem ipsum is a place holder text commonly used to demonstrate the graphic elements of a document or visual presentation. By replacing the distraction of meaningful content with filler text of scrambled Latin it allows viewers to focus on graphical elements such as font, typography, and layout.
	</p>
	Please enter the no of paragraphs to be generated (Max 99)
	<form method="POST" action="/para">
		<input type ="text"  name ="paras" >
		<input type ="submit" value="Generate" >
	</form>
	<br>
	<h2>Random User Generator</h2>
	<p>	
		Create random user profile for your applications. Like Lorem Ipsum, but for people. User profile will include user's name, address and tag line.
	</p>
	Please enter the no of users to be generated (Max 99)
	<form method="post" action="/user">
		<input type ="text" name = "users" >
		<input type ="submit" value= "Generate" >
	</form>
	
@stop