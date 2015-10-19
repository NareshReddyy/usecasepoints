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

		<title>TCF</title>
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
            <li class="active"><a href="TCF.php">Technical Complexity Factor</a></li>
            <li><a href="ECF.php">Environmental Complexity Factor</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    
 <div class="container">
 	<div class="row">
		<div class="col-sm-6">
			<h4>Technical Complexity Factor(TCF)</h4>
			<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
				<div class="spd">
				<div class="form-group">
		          <label for="number"><b>T1.Distributed system</b></label>
				  <input type="number" class="form-control" name="t1" placeholder="Distributed system(0-5)">
				</div>
				<div class="form-group">
		        	<label for="number"><b>T2.Response time</b></label>
					<input type="number" class="form-control" name="t2"  placeholder="Response Time(0-5)">
				</div>
				<div class="form-group">
					<label for="complex"><b>T3.End-user efficiency</b></label>
					<input type="number" class="form-control" name="t3"  placeholder="End-user efficiency(0-5)">
				</div>
				<div class="form-group">
					<label for="complex"><b>T4.Internal processing complexity</b></label>
					<input type="number" class="form-control" name="t4"  placeholder="Internal processing(0-5)">
				</div>
				<div class="form-group">
					<label for="complex"><b>T5.Code reusability</b></label>
					<input type="number" class="form-control" name="t5"  placeholder="Code reeusability(0-5)">
				</div>
				<div class="form-group">
					<label for="complex"><b>T6.Easy to install</b></label>
					<input type="number" class="form-control" name="t6"  placeholder="Easy to install(0-5)">
				</div>
				<div class="form-group">
					<label for="complex"><b>T7.Easy to use</b></label>
					<input type="number" class="form-control" name="t7"  placeholder="Easy to use(0-5)">
				</div>
				<div class="form-group">
					<label for="complex"><b>T8.Portability to other platforms</b></label>
					<input type="number" class="form-control" name="t8"  placeholder="Portability(0-5)">
				</div>
				<div class="form-group">
					<label for="complex"><b>T9.System maintenance</b></label>
					<input type="number" class="form-control" name="t9"  placeholder="System maintenance(0-5)">
				</div>
				<div class="form-group">
					<label for="complex"><b>T10.Concurrent/parallel processing</b></label>
					<input type="number" class="form-control" name="t10"  placeholder="Parallel processing(0-5)">
				</div>
				<div class="form-group">
					<label for="complex"><b>T11.Security features</b></label>
					<input type="number" class="form-control" name="t11"  placeholder="Security features(0-5)">
				</div>
				<div class="form-group">
					<label for="complex"><b>T12.Access for third parties</b></label>
					<input type="number" class="form-control" name="t12"  placeholder="Access for third parties(0-5)">
				</div>
				<div class="form-group">
					<label for="complex"><b>T13.End user training</b></label>
					<input type="number" class="form-control" name="t13"  placeholder="End user training(0-5)">
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
		          <label for="text"><b>Technical Complexity Factor(TCF)</b></label>
		          <label for="text"><b>=(0.65)+(TF/100)</b></label>
				  <input type="text" class="form-control" name="uucw" placeholder="uucw" value="<?php
				    if(isset($_POST['compute']))
					{
					$t1 = $_POST['t1'];
					$t2 = $_POST['t2'];
					$t3 = $_POST['t3'];
					$t4 = $_POST['t4'];
					$t5 = $_POST['t5'];
					$t6 = $_POST['t6'];
					$t7 = $_POST['t7'];
					$t8 = $_POST['t8'];
					$t9 = $_POST['t9'];
					$t10 = $_POST['t10'];
					$t11 = $_POST['t11'];
					$t12 = $_POST['t12'];
					$t13 = $_POST['t13'];
					$tf1 = $t1*2;
					$tf2 = $t2*1;
					$tf3 = $t3*1;
					$tf4 = $t4*1;
					$tf5 = $t5*1;
					$tf6 = $t6*0.5;
					$tf7 = $t7*0.5;
					$tf8 = $t8*2;
					$tf9 = $t9*1;
					$tf10 = $t10*1;
					$tf11 = $t11*1;
					$tf12 = $t12*1;
					$tf13 = $t13*1;
					$tf = $tf1+$tf2+$tf3+$tf4+$tf5+$tf6+$tf7+$tf8+$tf9+$tf10+$tf11+$tf12+$tf13;
					$tcf = 0.6 +($tf/100);
					echo $tcf;
					$_SESSION['tcf'] = $tcf;
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