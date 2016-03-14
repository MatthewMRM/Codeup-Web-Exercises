<?php
	var_dump($_GET);
	var_dump($_POST);
?>	
<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>My First HTML Form</title>
	</head>
	
	<body>
	
		<div id="wrapper">		
		<h2>User Login</h2>
			<form method="POST" action="/my_first_form.php">
				
				<p>
					<label for="username">Username</label>
					<input id="username" name="username" type="text" placeholder="Username">
				</p>	
				<p>
					<label for="password">Password</label>
					<input id="password" name="password" type="password" placeholder="Password">
				</p>
				
				<p>
					<button type="submit" name="submit">Login</button>
				</p>
		<hr>		
			</form>
			<form>
				<h2>Compose an Email</h2>
				
				<p>
					<label for="To:">To:</label>
					<input type="email" name="email" placeholder="Enter Email Here">
				</p>
				<p>
					<label for="From:">From:</label>
					<input type="email" name="email" placeholder="Enter Email Here">
				</p>		
				<p>
					<label for="Subject:">Subject:</label>
					<input type="text" name="text">
				<p>
					<label for="Body:">Body:</label>
					<textarea id="email_body" name="email_body" rows="5" cols="40" placeholder="Content Here"></textarea>
				</p>
				<p>
					<label for="Save_Folder">Save a Copy in Folder</label>
					<input type="checkbox" id="mailing_list" name="mailing_list" value="yes" checked>
				</p>			
				<p>
					<button type="submit" name="submit">Submit</button>
				</p>	
			<form>
				<h2>Multiple Choice Test</h2>
				<p>What do you like about SXSW?</p>
				<label>
					<input type="radio" name="q1" value="The Food" checked>The Food</label>
				<label>
					<input type="radio" name="q1" value="The Speakers">The Speakers</label>
				<label>
					<input type="radio" name="q1" value="The Free Stuff">The Free Stuff</label>
				<label>
					<input type="radio" name="q1" value="The Music">The Music</label>
			</form>	
			<form>		
				<p>What do you like about New York?</p>
				<label>
					<input type="radio" name="q1" value="The Food" checked>The Food</label>
				<label>
					<input type="radio" name="q1" value="The Attractions">The Attractions</label>
				<label>
					<input type="radio" name="q1" value="The Buildings">The Buildings</label>
				<label>
					<input type="radio" name="q1" value="Broadway">Broadway</label>	
				<p>What do you like about Codeup?</p>
				<label><input type="checkbox" id="os1" name="os[]" value="The Instructors" checked> The Instructors</label>
				<label><input type="checkbox" id="os1" name="os[]" value="The Course Structure" checked> The Course Structure</label>
				<label><input type="checkbox" id="os1" name="os[]" value="Geekdom Access" checked> Geekdom Access</label>		
			</form>				

		</div>
	</body>		
</html>				
