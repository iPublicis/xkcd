<?php 	
	//error_reporting(-1);
	//ini_set('display_errors', 1);
	require('logic.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>xkcd password generator</title>
	<meta charset="utf-8">
	<!-- Bootstrap additions -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>		
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- End of Bootstrap additions -->

	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="icon" type="image/ico" href="images/favicon.ico">


</head>
<body class="container">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
		<h1>xkcd password generator</h1>
  </div>
</nav>


<form action="index.php" method="POST" role="form" class="form-horizontal">

	<header class="jumbotron">
		<h2 class="subtitle">Generate a random password <a href="http://xkcd.com/936/">xkcd</a> style from a list of 235,886 words</h2>
		<div class="password"><?php echo xkcd_password($numberOfWords,$separator,$transformation,$length); ?></div>
		<br>
		<div class="button">
			<button type="submit" class="btn btn-default">Generate another password</button>
		</div>

	</header>


	<div class="row">
		<div class="col-sm-4">
			<div class="form-group">
				<div class="row">
					<label for="separator" class="col-md-6 control-label">Separator</label>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<input type="text" class="form-control" id="separator" name="separator" 
								value="<?php echo $separator; ?>">
						<p class="help-block">One or more regular or special characters"</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<div class="row">
					<label for="numberofwords" class="col-md-6 control-label">Number of Words</label>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<input type="number" class="form-control" id="numberofwords" name="numberofwords" 
							value="<?php echo $numberOfWords; ?>">
					</div>
				</div>
			</div>		
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<div class="row">
					<label  class="col-md-4 control-label">Transformation</label>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="radio">
							<label><input type="radio" name="transformation" value="uppercase" <?php echo transformation_checked("uppercase",$transformation) ?> >Upper Case</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="transformation" value="firstupper" <?php echo transformation_checked("firstupper",$transformation) ?> >First letter upper case</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="transformation" value="lowercase" <?php echo transformation_checked("lowercase",$transformation) ?> >Lower Case</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- Form's First row -->
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
				<div class="row">
					<div class="col-sm-3">
						<label for="length" class="control-label">Maximum length</label>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3">
						<input type="number" class="form-control" id="length" name="length" 
						value="<?php echo $length; ?>">		
					</div>		
				</div>
				<div class="row">
					<div class="col-sm-12">
						<p class="help-block">Length limit; 0 indicates no limit</p>
					</div>
				</div>
			</div>				
		</div> <!-- Second row first column -->
	</div> <!-- Form's second row -->
	<div class="button">
		<button type="submit" class="btn btn-default">Generate another password</button>
	</div>
</form>
</body>
</html>