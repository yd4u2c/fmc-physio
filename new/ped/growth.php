<?php
include("include/connect.php");

$num = $_SESSION['num'];
$rec = $_SESSION['rec'];
if (isset($_POST['submit'])) {
	$num2 = $_POST['id'];
	$physio = $_POST['physio'];
	$info = $_POST['info'];
	$rec = $_POST['rec'];
	extract($_POST);
	$c = count($_POST['describe']);
	//$c = 4;
	for($a = 0; $a < $c; $a++)
	{ 
		$complain[$a];
		$ins = "INSERT INTO fmcphy.growth_1 VALUES(NULL,'$num2','".$describe[$a]."','$physio','$info','$rec')";
		$res = $conn->query($ins);
		/**
		if ($res === TRUE) {
			?>
			<meta http-equiv="refresh" content="0; URL=http:preg.php">
			<?php
		}
		**/
	}

	$c = 12;
	//$c = 4;
	for($a = 0; $a < $c; $a++)
	{ 
		$complain[$a];
		$ins = "INSERT INTO fmcphy.growth_2 VALUES(NULL,'$num2','".$question[$a]."','".$answer[$a]."','$physio','$info','$rec')";
		$res2 = $conn->query($ins);
	}
	if ($res === TRUE AND $res2 === TRUE) {
		?>
		<meta http-equiv="refresh" content="0; URL=http:previous.php">
		<?php
	}
}
?>
<!--meta http-equiv="refresh" content="0; URL=http:subjective.php"-->
<?php


?>
<!DOCTYPE HTML>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/morris.css" type="text/css"/>
	<!-- Graph CSS -->
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<!-- jQuery -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- //jQuery -->
	<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<!-- lined-icons -->
	<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
	<!-- //lined-icons -->
	<style type="text/css">
	.panel-body{
		background: #fff;
	}
</style>
</head> 
<body>
	<div class="page-container">
		<!--/content-inner-->
		<div class="left-content">
			<div class="mother-grid-inner">
				<!--header start here-->
				<!--heder end here-->
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Home</a> <i class="fa fa-angle-right"></i>Add Report</li>
				</ol>
				<!--four-grids here-->
				<div class="four-grids" style="height: 500px;">
					<h3>Report</h3>
					<div class="col-sm-12">
						<div class="col-sm-4"></div>
						<div class="panel panel-primary col-sm-4">
							<div class="panel-heading">Growth and Development</div>
							<div class="panel-body">
								<form method="POST">
									<div class="form-group">
										<label for="exampleInputEmail1">Patient id</label>
										<input type="text" name="id" value="<?php echo $num; ?>" readonly class="form-control" id="exampleInputEmail1" />
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">At what age did your child?</label>
										<!--input type="text" name="reason" required  class="form-control" id="exampleInputEmail1" /-->
									</div>
									<table class="table">
										<tr>
											<td>
												<input type="text" name="question[]" class="form-control" value="Roll over from stomach to back" readonly>
											</td>
											<td>
												<input type="text" name="answer[]" required class="form-control" placeholder="input answer here">
											</td>
										</tr>
										<tr>
											<td>
												<input type="text" name="question[]" class="form-control" value="Roll over from back to stomach" readonly>
											</td>
											<td>
												<input type="text" name="answer[]" required class="form-control" placeholder="input answer here">
											</td>
										</tr>
										<tr>
											<td>
												<input type="text" name="question[]" class="form-control" value="sit independently" readonly>
											</td>
											<td>
												<input type="text" name="answer[]" required class="form-control" placeholder="input answer here">
											</td>
										</tr>
										<tr>
											<td>
												<input type="text" name="question[]" class="form-control" value="crawl" readonly>
											</td>
											<td>
												<input type="text" name="answer[]" required class="form-control" placeholder="input answer here">
											</td>
										</tr>
										<tr>
											<td>
												<input type="text" name="question[]" class="form-control" value="walk holding unto furniture" readonly>
											</td>
											<td>
												<input type="text" name="answer[]" required class="form-control" placeholder="input answer here">
											</td>
										</tr>
										<tr>
											<td>
												<input type="text" name="question[]" class="form-control" value="walk independently" readonly>
											</td>
											<td>
												<input type="text" name="answer[]" required class="form-control" placeholder="input answer here">
											</td>
										</tr>
										<tr>
											<td>
												<input type="text" name="question[]" class="form-control" value="speak first word" readonly>
											</td>
											<td>
												<input type="text" name="answer[]" required class="form-control" placeholder="input answer here">
											</td>
										</tr>
										<tr>
											<td>
												<input type="text" name="question[]" class="form-control" value="speak in two words sentence" readonly>
											</td>
											<td>
												<input type="text" name="answer[]" required class="form-control" placeholder="input answer here">
											</td>
										</tr>
										<tr>
											<td>
												<input type="text" name="question[]" class="form-control" value="Drink from cup" readonly>
											</td>
											<td>
												<input type="text" name="answer[]" required class="form-control" placeholder="input answer here">
											</td>
										</tr>
										<tr>
											<td>
												<input type="text" name="question[]" class="form-control" value="use a spoon" readonly>
											</td>
											<td>
												<input type="text" name="answer[]" required class="form-control" placeholder="input answer here">
											</td>
										</tr>
										<tr>
											<td>
												<input type="text" name="question[]" class="form-control" value="Dress independently" readonly>
											</td>
											<td>
												<input type="text" name="answer[]" required class="form-control" placeholder="input answer here">
											</td>
										</tr>
										<tr>
											<td>
												<input type="text" name="question[]" class="form-control" value="Toilet train" readonly>
											</td>
											<td>
												<input type="text" name="answer[]" required class="form-control" placeholder="input answer here">
											</td>
										</tr>
									</table>
									<p>&nbsp;</p>
									<p>Please describe your child</p>
									<div class="form-group">
										<label><input type="checkbox" name="describe[]" value="Mostly quite"> Mostly quite</label>&nbsp;&nbsp;&nbsp;&nbsp;
										<label><input type="checkbox" name="describe[]" value="Tires easily"> Tires easily</label>&nbsp;&nbsp;&nbsp;&nbsp;
										<label><input type="checkbox" name="describe[]" value="Talks constantly"> Talks constantly</label>&nbsp;&nbsp;&nbsp;&nbsp;
										<label><input type="checkbox" name="describe[]" value="clumsy"> clumsy</label>&nbsp;&nbsp;&nbsp;&nbsp;
										<label><input type="checkbox" name="describe[]" value="happy"> happy</label>&nbsp;&nbsp;&nbsp;&nbsp;
										<label><input type="checkbox" name="describe[]" value="impulsive"> impulsive</label>&nbsp;&nbsp;&nbsp;&nbsp;
										<label><input type="checkbox" name="describe[]" value="overly active"> overly active</label>&nbsp;&nbsp;&nbsp;&nbsp;
										<label><input type="checkbox" name="describe[]" value="overreacts frequently"> Overeact frequently</label>&nbsp;&nbsp;&nbsp;&nbsp;
										<label><input type="checkbox" name="describe[]" value="shy"> shy</label>&nbsp;&nbsp;&nbsp;&nbsp;
										<label><input type="checkbox" name="describe[]" value="Restless"> restless</label>&nbsp;&nbsp;&nbsp;&nbsp;
										<label><input type="checkbox" name="describe[]" value="Craves touch"> Craves touch</label>&nbsp;&nbsp;&nbsp;&nbsp;
										<label><input type="checkbox" name="describe[]" value="Get frustrated easily"> Get frustrated easily</label>&nbsp;&nbsp;&nbsp;&nbsp;
										<label><input type="checkbox" name="describe[]" value="stubborn"> stubborn</label>&nbsp;&nbsp;&nbsp;&nbsp;
										<label><input type="checkbox" name="describe[]" value="Has temper tantrums"> Has temper tantrums</label>&nbsp;&nbsp;&nbsp;&nbsp;
										<label><input type="checkbox" name="describe[]" value="Difficulty speaking"> Difficulty speaking</label>&nbsp;&nbsp;&nbsp;&nbsp;
										<label><input type="checkbox" name="describe[]" value="Has nervours habits"> Has nervours habits</label>&nbsp;&nbsp;&nbsp;&nbsp;
										<label><input type="checkbox" name="describe[]" value="Has unusual fears"> Has unusual fears</label>&nbsp;&nbsp;&nbsp;&nbsp;
										<label><input type="checkbox" name="describe[]" value="Avoids touch"> Avoids touch</label>&nbsp;&nbsp;&nbsp;&nbsp;
										<label><input type="checkbox" name="describe[]" value="Has poor attention span"> Has poor attention span</label>&nbsp;&nbsp;&nbsp;&nbsp;
										<label><input type="checkbox" name="describe[]" value="Difficulty learning new task"> Difficulty in learning new task</label>&nbsp;&nbsp;&nbsp;&nbsp;
										<input type="text" name="describe[]" placeholder="Enter other here">&nbsp;&nbsp;&nbsp;&nbsp;
									</div>
									<div class="checkbox">
										<label><input type="checkbox" required> I have reviewed the information provided above and I found them to be complete</label>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Physiotherapist (Name)</label>
										<input type="text" name="physio" required class="form-control" id="exampleInputEmail1" />
										<input type="text" name="rec" value="<?php echo($rec); ?>" required class="form-control" id="exampleInputEmail1" style="display: none;" />
									</div>
									<p>&nbsp;</p>
									<textarea name="info" placeholder="Other related information" class="form-control"></textarea>
									<p>&nbsp;</p>
									<button type="submit" class="btn btn-primary" name="submit">Continue</button>
								</form>
							</div>

						</div>
						<div class="col-sm-4">
						</div>
					</div>
				</div>
				<!--//four-grids here-->
				<!--photoday-section-->	



				<div class="clearfix"></div>
				<script type="text/javascript">
					$(document).ready(function () {
						$(".css-checkbox").click(function () {
							if ($(this).attr('id') == "one") {
								$('#a').show();
								$('#b').hide();
								$("#myForm").attr('action','one.php');
							} else {
								$('#a').hide();
								$('#b').show();
								$("#myForm").attr('action','two.php');
							}
						});

					});
				</script>
				<style type="text/css">
				#b{
					display:none;  
				}
			</style>

			<!--//photoday-section-->	
			<!--w3-agileits-pane-->	

			<!--//w3-agileits-pane-->	
			<!-- script-for sticky-nav -->
			<script>
				$(document).ready(function() {
					var navoffeset=$(".header-main").offset().top;
					$(window).scroll(function(){
						var scrollpos=$(window).scrollTop(); 
						if(scrollpos >=navoffeset){
							$(".header-main").addClass("fixed");
						}else{
							$(".header-main").removeClass("fixed");
						}
					});

				});
			</script>
			<!-- /script-for sticky-nav -->
			<!--inner block start here-->
			<div class="inner-block">

			</div>
			<!--inner block end here-->
			<!--copy rights start here-->
			<?php include("include/footer.php"); ?>
			<!--COPY rights end here-->
		</div>
	</div>
	<?php include("include/sidebar.php"); ?>		
</div>
<script>
	var toggle = true;

	$(".sidebar-icon").click(function() {                
		if (toggle)
		{
			$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
			$("#menu span").css({"position":"absolute"});
		}
		else
		{
			$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
			setTimeout(function() {
				$("#menu span").css({"position":"relative"});
			}, 400);
		}

		toggle = !toggle;
	});
</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- /Bootstrap Core JavaScript -->	   
<!-- morris JavaScript -->	
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
		jQuery('.small-graph-box').hover(function() {
			jQuery(this).find('.box-button').fadeIn('fast');
		}, function() {
			jQuery(this).find('.box-button').fadeOut('fast');
		});
		jQuery('.small-graph-box .box-close').click(function() {
			jQuery(this).closest('.small-graph-box').fadeOut(200);
			return false;
		});

	    //CHARTS
	    function gd(year, day, month) {
	    	return new Date(year, month - 1, day).getTime();
	    }

	    graphArea2 = Morris.Area({
	    	element: 'hero-area',
	    	padding: 10,
	    	behaveLikeLine: true,
	    	gridEnabled: false,
	    	gridLineColor: '#dddddd',
	    	axes: true,
	    	resize: true,
	    	smooth:true,
	    	pointSize: 0,
	    	lineWidth: 0,
	    	fillOpacity:0.85,
	    	data: [
	    	{period: '2014 Q1', iphone: 2668, ipad: null, itouch: 2649},
	    	{period: '2014 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
	    	{period: '2014 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
	    	{period: '2014 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
	    	{period: '2015 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
	    	{period: '2015 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
	    	{period: '2015 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
	    	{period: '2015 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
	    	{period: '2016 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
	    	{period: '2016 Q2', iphone: 8442, ipad: 5723, itouch: 1801}
	    	],
	    	lineColors:['#ff4a43','#a2d200','#22beef'],
	    	xkey: 'period',
	    	redraw: true,
	    	ykeys: ['iphone', 'ipad', 'itouch'],
	    	labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
	    	pointSize: 2,
	    	hideHover: 'auto',
	    	resize: true
	    });


	});
</script>
</body>
</html>