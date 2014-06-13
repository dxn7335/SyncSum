<?php
	require_once 'config.php';
	$current = "landing";
	require_once 'header.php'; 
?>

<div class="container-fluid" style="padding:0;">
	<div id="land">
		<!--Main page header-->
		<div class="row center-block landing-space" >
			<div class="col-md-12">
				<h1 class="text-center">Job Matching. With Personality</h1>
			</div>
		</div>
		
		<!--Middle glyph description-->
		<div class="row text-center">
			<div class="col-md-4">
				<img src="../Images/icon1.png" />
				<p>Connecting applicants and employers</p>
			</div>
			<div class="col-md-4">
				<img src="../Images/icon2.png" />
				<p>Test your skills.<br>Measure career progress.</p>
			</div>
			<div class="col-md-4">
				<img src="../Images/icon3.png" />
				<p>Easy. Smart. Logical.</p>
			</div>
		</div>
		
		<!--Middle paragraph-->
		<div class="landing-space">
			<div class="col-md-6 col-md-offset-3">
				<div id="wrapper-bottom-landing">
					<p>Join our community now to meet new people; share photos, videos
					 and music; create your own blog; post ads; chat online and more!</p>
				</div>
			</div>
		</div>
		
		<!--Last button-->
		<div class="landing-space">
			<div style="height: 40%;">
				<button type="submit" class="btn btn-info btn-lg center-block">Join Us!</button>
			</div>
		</div>
	</div>
</div>

<?php
	require_once 'footer.php';
?>
