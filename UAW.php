<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="USECASEPOINTS">
    <meta name="author" content="SpeedY">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

		<title>UAW</title>
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="assets/bootstrap-3/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="pop-up-demo/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="pop-up-demo/js/jquery.leanModal.min.js"></script>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
<link type="text/css" rel="stylesheet" href="pop-up-demo/css/popup.css" />
    <style>
			.spd {
    background: none repeat scroll 0% 0% padding-box rgba(255, 255, 255, 0.8);
    padding: 20px 20px 20px;
    border-radius: 50px;
    box-shadow: 0px 1px #FFF inset, 0px 0px 4px #C8CFE6;
}
   </style>
	</head>

	<body>
		<div class="panel panel-primary">
			<div class="panel-heading" style="text-align: center"><h1>USECASEPOINTS</h1></div>
		 <div class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">UseCasePoints</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
             <li><a href="UUCW.php">Unadjusted UseCase Weight</a></li>
            <li class="active"><a href="UAW.php">Unadjusted Actor Weight</a></li>
            <li><a href="TCF.php">Technical Complexity Factor</a></li>
            <li><a href="ECF.php">Environmental Complexity Factor</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    
 <div class="container">
 	<div class="row">
		<div class="col-sm-6">
			<h4>Unadjusted Actors Weight(UAW)</h4>
			<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
				<div class="spd">
				<div class="form-group">
		          <label for="simple"><b>Simple</b></label>
				  <input type="number" class="form-control" name="simple" placeholder="simple">
				</div>
				<div class="form-group">
		        	<label for="number"><b>Average</b></label>
					<input type="number" class="form-control" name="average"  placeholder="average">
				</div>
				<div class="form-group">
					<label for="complex"><b>Complex</b></label>
					<input type="number" class="form-control" name="complex"  placeholder="complex">
				</div>
				<button type="submit" name="compute" class="btn btn-primary">Compute</button>
				</div>
			</form>
		</div>
		<div class="col-sm-6">
		<h4>Result</h4>
			<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
				<div class="spd">
				<div class="form-group">
		          <label for="text"><b>Unadjusted Actors Weight(UAW)</b></label>
		          <label for="text"><b>=(simple*1)+(Average*2)+(Complex*3)</b></label>
				  <input type="text" class="form-control" name="uucw" placeholder="uucw" value="<?php
				    if(isset($_POST['simple']) and isset($_POST['average']) and isset($_POST['complex']))
					{
					$simple = $_POST['simple'];
					$average = $_POST['average'];
					$complex = $_POST['complex'];
					$uaw = ($simple*1)+($average*2)+($complex*3);
					echo $uaw;
					$_SESSION['uaw'] = $uaw;
					}
				  ?>">
				</div>
				</div>
			</form>
		</div>
		</div>
   </div>

	</body>
</html>