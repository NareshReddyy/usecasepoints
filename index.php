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

		<title>USECASEPOINTS</title>
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
            <li><a href="UAW.php">Unadjusted Actor Weight</a></li>
            <li><a href="TCF.php">Technical Complexity Factor</a></li>
            <li><a href="ECF.php">Environmental Complexity Factor</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    
 <div class="container">
 	<div class="row">
		<div class="col-sm-6">
			<h4>Use Case Points</h4>
			<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
				<div class="spd">
				<div class="form-group">
				 <label for="number"><b>Hours per usecase point</b></label>
				  <input type="number" class="form-control" name="hours" placeholder="hours per usecasepoint">
                 </div>				
				<div class="form-group">
		          <label for="number"><b>Unadjusted Usecase Weight(UUCW)</b></label>
				  <input type="number" class="form-control" name="uucw" placeholder="UUCW" value="<?php
				  if (isset($_SESSION['uucw']))
				  { 
				  $uucw1 = $_SESSION['uucw'];
				  echo $uucw1;
				  }
				  ?>">
				</div>
				<div class="form-group">
		        	<label for="number"><b>Unadjusted Actors Weight(UAW)</b></label>
					<input type="number" class="form-control" name="uaw"  placeholder="UAW" value="<?php
					 if(isset($_SESSION['uaw']))
				  { 
				  $uaw1 = $_SESSION['uaw'];
				  echo $uaw1;
				  }
					?>">
				</div>
				<div class="form-group">
					<label for="complex">Technical Complexity Factor(TCF)</b></label>
					<input type="number" class="form-control" name="tcf"  placeholder="TCF" value="<?php
					 if(isset($_SESSION['tcf']))
				  { 
				  $tcf1 = $_SESSION['tcf'];
				  echo $tcf1;
				  }
					?>">
				</div>
				<div class="form-group">
					<label for="complex"><b>Environmental Complexity Factor(ECF)</b></label>
					<input type="number" class="form-control" name="ecf"  placeholder="Environmental Complexity Factor" value="<?php
					 if(isset($_SESSION['ecf']))
				  { 
				  $ecf1 = $_SESSION['ecf'];
				  echo $ecf1;
				  }
					?>">
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
		          <label for="ucp"><b>UseCasePoints(UCP)</b></label>
		          <label for="text"><b>=(UUCW+UAW)*TCF*ECF</b></label>
				  <input type="text" class="form-control" name="uucw" placeholder="uucw" value="<?php
				  if(isset($_POST['compute']))
				  {
				    if(isset($_SESSION['uucw']) and isset($_SESSION['uaw']) and isset($_SESSION['tcf']) and isset($_SESSION['ecf']))
					{
					$uucw = $_SESSION['uucw'];
					$uaw  = $_SESSION['uaw'];
					$tcf  = $_SESSION['tcf'];
					$ecf = $_SESSION['ecf'];
					$ucp = ($uucw+$uaw)*$tcf*$ecf;
					echo $ucp;
					$_SESSION['ucp'] = $ucp;
					}}
				  ?>">
				 </div>
				 <div class="form-group">
				  <label for="ee"><b>Estimated Effort = UCP * HOURS/UCP</b></label>
				  <input type="text" class="form-control" name="effort" placeholder="estimated effort" value="<?php
				  if(isset($_POST['hours']))
				  {
				  $ucp1 = $_SESSION['ucp'];
				  $hour = $_POST['hours'];
				  $effort = $ucp1*$hour;
				  echo $effort;
				  }
				  ?>"
				</div>
				</div>
			</form>
		</div>
		</div>
		<div class="row">
		<label>
		</div>
   </div>

	</body>
</html>