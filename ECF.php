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

		<title>ECF</title>
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
            <li class="active"><a href="ECF.php">Environmental Complexity Factor</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    
 <div class="container">
 	<div class="row">
		<div class="col-sm-6">
			<h4>Environmental Complexity Factor(ECF)</h4>
			<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
				<div class="spd">
				<div class="form-group">
		          <label for="number"><b>E1.Familiarity with development process used</b></label>
				  <input type="number" class="form-control" name="e1" placeholder="Familiarity with development process used(0-5)">
				</div>
				<div class="form-group">
		        	<label for="number"><b>E2.Application Experience</b></label>
					<input type="number" class="form-control" name="e2"  placeholder="Application Experience(0-5)">
				</div>
				<div class="form-group">
					<label for="complex"><b>E3.Object-oriented experience of team</b></label>
					<input type="number" class="form-control" name="e3"  placeholder="Object-oriented experience of team(0-5)">
				</div>
				<div class="form-group">
					<label for="complex"><b>E4.Lead analyst capability</b></label>
					<input type="number" class="form-control" name="e4"  placeholder="Internal processing(0-5)">
				</div>
				<div class="form-group">
					<label for="complex"><b>E5.Motivation of the team</b></label>
					<input type="number" class="form-control" name="e5"  placeholder="Motivation(0-5)">
				</div>
				<div class="form-group">
					<label for="complex"><b>E6.Stability of requirements</b></label>
					<input type="number" class="form-control" name="e6"  placeholder="Stability(0-5)">
				</div>
				<div class="form-group">
					<label for="complex"><b>E7.Part-time staff</b></label>
					<input type="number" class="form-control" name="e7"  placeholder="Part-time staff(0-5)">
				</div>
				<div class="form-group">
					<label for="complex"><b>E8.Difficult programming language</b></label>
					<input type="number" class="form-control" name="e8"  placeholder="Difficult of programming language(0-5)">
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
		          <label for="ecf"><b>Environmental Complexity Factor(ECF)</b></label>
		          <label for="ecf"><b>=(1.4)+(-0.03*EF)</b></label>
				  <input type="text" class="form-control" name="uucw" placeholder="uucw" value="<?php
				    if(isset($_POST['e1']) and isset($_POST['e2']) and isset($_POST['e3']) and isset($_POST['e4']) and isset($_POST['e5']) and isset($_POST['e6']) and isset($_POST['e7']) and isset($_POST['e8']))
					{
					$e1 = $_POST['e1'];
					$e2 = $_POST['e2'];
					$e3 = $_POST['e3'];
					$e4 = $_POST['e4'];
					$e5 = $_POST['e5'];
					$e6 = $_POST['e6'];
					$e7 = $_POST['e7'];
					$e8 = $_POST['e8'];
					$ef1 = $e1*1.5;
					$ef2 = $e2*0.5;
					$ef3 = $e3*1;
					$ef4 = $e4*0.5;
					$ef5 = $e5*1;
					$ef6 = $e6*2;
					$ef7 = $e7*-1;
					$ef8 = $e8*-1;
					$ef = $ef1+$ef2+$ef3+$ef4+$ef5+$ef6+$ef7+$ef8;
					$ecf = 0.6 +($ef/100);
					echo $ecf;
					$_SESSION['ecf'] = $ecf;
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