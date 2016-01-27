<?php
	var_dump($_GET);
	var_dump($_POST);
?>

<!DOCTYPE html>
<html>
<head>
	<title>My First Form</title>
</head>
<body>

	<h2>My first form</h2>
<div>
	<section class="User Login">
		<form method="POST" action="/My_First_Form.php">
			<p>
				<label for="username">Username</label>
				<input id="username" name="username" type="text" placeholder="enter username here">
			</p>
			<p>
				<label for="password">Password</label>
				<input id="password" name="password" type="password" placeholder="enter password here">
			</p>

			<label for="email_body">Message Body</label>	
			<br><textarea id="email_body" name="email_body" rows="8" col="5">Content Here</textarea></br>

			<p>
				<button type="submit">Login</button>	
			</p>
		</form>
	</section>
</div>
<div>
	<section class="Email">
		<form action="/my_first_form.php" method="POST">

			<p>
				<label for="to">To:</label>
				<input id="to" name="to" type="text" placeholder="To">
			</p>
			<p>
				<label for="from">From:</label>
				<input id="from" name="from" type="from" placeholder="From">
			</p>
			<p>
				<label for="subject">Subject:</label>
				<input id="subject" name="subject" type="subject" placeholder="Subject">
			</p>
			<p>
				<label for="body">Body:</label>
				<br><textarea id="body" name="body" rows="10" col="5"></textarea></br>
			</p>
			<p>
				<button type="submit">Send</button>
			</p>
			<p>
				<input type="checkbox" id="save_copy" name="save_copy" value="yes" checked>
				<label for="save_copy">Save a copy of this message</label>
		</form>
	</section>
</div>
<div>
	<section class="Quiz">
		<form action="/my_first_form.php" method="POST">

			<p>
				<h2>Multiple Choice Quiz</h2>
			</p>
			<p>
				<strong>Are these my hands?</strong>
			</p>
			<label>
				<input type="radio" name="q1" value="These are your hands">
				These are your hands
			</label>
			<br><label>
				<input type="radio" name="q1" value="These are not your hands">
				These are not your hands
			</label></br>
			<label>
				<input type="radio" name="q1" value="Where are your hands?">
				Where are your hands?
			</label>
			<p>
				<strong>Is League of Legends a balanced game?</strong>
			</p>
			<label>
				<input type="radio" name="q2" value="no">
				No
			</label>
			<br><label>
				<input type="radio" name="q2" value="yes">
				Yes
			</label></br>
			<label>
				<input type="radio" name="q2" value="somewhat">
				Somewhat
			</label>
			<p>
				<label for="select">Should you play your music very loud in class?</label>
				<select id="select" name="select">
					<option value=1>Yes</option>
					<option value=0>No</option>
				</select>
			</p>
			<p>
				<button type="submit">Submit</button>
			</p>

		</form>
	</section>
</div>
<div>	
		<form action="/my_first_form.php" method="POST">

			<p>
				<h3>Select Testing</h3>
			</p>
			<P>
				<label for="select_test">Is Logan hot af?</label>
				<select id="select" name="select_test">
					<option value=1>Yes</option>
					<option value=0>No</option>
				</select>
			</p>
			<p>
				<button type="submit">Submit</button>
			</p>
		</form>
</div>

</body>
