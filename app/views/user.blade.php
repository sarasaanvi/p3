@extends('_master')

@section('title')
	Random Users
@stop


@section('content')
	<h1>Welcome to Developer's Best Friend</h1>
	<br>
	<h2>Random Users Generator</h2>
	<p>	
		<?php
			$users = $inputs["users"];			
			//verification that no is an integer and within 99
			if (is_numeric($users) and (int)$users <=99 and (int)$users >0) {
				$faker = Faker\Factory::create();
				for ($i=0; $i < $users; $i++) {
					echo $faker->name, "<br />";
					echo $faker->address, "<br />";
					echo $faker->text, "<br />";
					echo "<br />";
					echo "<br />";					 
				}	
			} else {
				echo "Invalid input for no of users";
			}
		?>
	</p>