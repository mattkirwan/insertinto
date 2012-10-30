<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>INSERT INTO .me - The MySQL INSERT Generator</title>
		<style type="text/css">
			label {
				display: block;
				width: 12.5em;
				height: 50px;
			}

			input {

			}
		</style>
	</head>
	<body>
		<h1>INSERT INTO .`me`</h1>
		<h2>Quick and dirty MySQL INSERT generator.</h2>
		<div id="content">
			<p>We've all wrote quick script's to generate SQL queries that allow us to insert bulk data in one fell swoop.</p>
			<p>I've hacked together this site to do just that. For now it's only really good at generating many to many schema's, the aim is to add more options over time.</p>
			<p>Ultimately this idea is nothing new, like many other quick snippets of code it was nearly lost forever - until I realised that the best domain name in the world was available.</p>
			<div id="generator">
				<form action="" method="post">
					<fieldset>

						<legend>Many to Many Relationship Generator</legend>

						<label for="db">Database Name</label>
						<input type="text" name="db" value="" />

						<label for="table">Table Name</label>
						<input type="text" name="table" value="" />

						<label for="key_1_name">Field Name (Key 1)</label>
						<input type="text" name="key_1_name" value="" />	

						<label for="key_2_name">Field Name (Key 2)</label>
						<input type="text" name="key_2_name" value="" />		

					</fieldset>

					<fieldset>

						<label for="from">Generate From</label>
						<input type="text" name="from" value="" />	

						<label for="to">Generate To</label>
						<input type="text" name="to" value="" />

						<label for="increment">Increments</label>
						<input type="text" name="increment" value="" />	

					</fieldset>

					<fieldset>
						<input type="submit" value="generate" />
					</fieldset>

				</form>
			</div>
		</div>
	</body>
</html>