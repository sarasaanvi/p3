@extends('_master')

@section('title')
	Lorem Ipsum
@stop

@section('content')
	<h2>Your Paragraphs are here...!!!</h2>
	<p>	
		<?php
			$para = $inputs["paras"];
			//php echo app_path()
			//verification that no is an integer and within 99
			if (is_numeric($para) and (int)$para <=99 and (int)$para >0) {				
				$generator = new Badcow\LoremIpsum\Generator();
				$paragraphs = $generator->getParagraphs($para);
				echo implode('<p>', $paragraphs);	
			} else {
				echo "Invalid input for no of paragraphs";
			}
		?>
	</p>
@stop