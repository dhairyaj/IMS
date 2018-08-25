<?php

$link = mysqli_connect("localhost", "root", "qwerty", "authentication");

if(isset($_POST['btn'])) {

	if(!empty($_POST['a']) && !empty($_POST['b']) && !empty($_POST['c']) && !empty($_POST['d']) && !empty($_POST['e']) && !empty($_POST['f']) && !empty($_POST['g']) && !empty($_POST['h']) && !empty($_POST['i']) && !empty($_POST['j']) && !empty($_POST['k']) && !empty($_POST['l']) && !empty($_POST['m']) && !empty($_POST['n']) && !empty($_POST['o']) && !empty($_POST['p']) && !empty($_POST['q']) && !empty($_POST['r']) && !empty($_POST['s']) && !empty($_POST['t']) && !empty($_POST['u']) && !empty($_POST['v']) && !empty($_POST['w'])) {

		$a = mysqli_real_escape_string($link, $_POST['a']);
		$b = mysqli_real_escape_string($link, $_POST['b']);
		$c = mysqli_real_escape_string($link, $_POST['c']);
		$d = mysqli_real_escape_string($link, $_POST['d']);
		$e = mysqli_real_escape_string($link, $_POST['e']);
		$f = mysqli_real_escape_string($link, $_POST['f']);
		$g = mysqli_real_escape_string($link, $_POST['g']);
		$h = mysqli_real_escape_string($link, $_POST['h']);
		$i = mysqli_real_escape_string($link, $_POST['i']);
		$j = mysqli_real_escape_string($link, $_POST['j']);
		$k = mysqli_real_escape_string($link, $_POST['k']);
		$l = mysqli_real_escape_string($link, $_POST['l']);
		$m = mysqli_real_escape_string($link, $_POST['m']);
		$n = mysqli_real_escape_string($link, $_POST['n']);
		$o = mysqli_real_escape_string($link, $_POST['o']);
		$p = mysqli_real_escape_string($link, $_POST['p']);
		$q = mysqli_real_escape_string($link, $_POST['q']);
		$r = mysqli_real_escape_string($link, $_POST['r']);
		$s = mysqli_real_escape_string($link, $_POST['s']);
		$t = mysqli_real_escape_string($link, $_POST['t']);
		$u = mysqli_real_escape_string($link, $_POST['u']);
		$v = mysqli_real_escape_string($link, $_POST['v']);
		$w = mysqli_real_escape_string($link, $_POST['w']);

		$query = "INSERT INTO `table1` (a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u, v, w) VALUES ('$a', '$b', '$c', '$d', '$e','$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$o', '$p', '$q', '$r', '$s', '$t', '$u', '$v', '$w')";

		mysqli_query($link, $query);
		echo "<script> alert('Successfully entered!');";
		echo "location.href='page2.php'; </script>";

	} 
} 

?>

<!DOCTYPE html>
<html>
<head>
	<title>page1</title>
	<!--Bootstrap-->
     <!--   <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
        <script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script> -->

    <!--Materialize-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

<style type="text/css">
	
	tr,td{
		 border: 1px solid black;
		 padding-left: 5px;
		 padding-right: 5px;
		 padding-top: 5px;
		 padding-bottom: 5px;
		 text-align: center;
	}

    table{
    	width: 100%;
    }

    body{
    	margin: 2% 2% 2% 2%; 
    }

</style>

</head>
<body>

<div style="background-color: lightblue;padding-bottom: 5px;padding-top: 5px;">
	<img src="" alt="logo" style="float: left;">
	<p style="text-align: center;">Rajasthan Rawatbhata Site 1-6</p>
	<p style="text-align: center;">Document No.RRS16/IMS/Level-I: Part B/R-00</p>
	<p style="text-align: center;">Intergrated Management System Manual Level-I: Part-B</p>
</div>
<br>
<div>
	<form method="post">
	<table>
	  <tr>
		<td>Topic</td>
		<td>Planning</td>
		<td colspan="4">Doc.Ref. No.</td>
		<td colspan="2">R16-IMS-6.2-MR(S)-O&T-ANEX.-P-B101</td>
	  </tr>
	  <tr>
		<td rowspan="2">Sub-topic</td>
		<td rowspan="2">Objective, targets,performance indicator & IMS programme</td>
		<td>Revision No.</td>
		<td>00</td>
		<td>Date</td>
		<td>01.02.2018</td>
		<td rowspan="2">Page No.</td>
		<td rowspan="2">31 of 67</td>
	  </tr>
	  <tr>
		<td>Issue No.</td>
		<td>01</td>
		<td>Date</td>
		<td>01.02.2018</td>
	  </tr>
    </table>
</div>
<br><br>
<div>
	<table>
		<tr>
			<td colspan="4">
				Section: <input type="text" name="a">
			</td>
			<td colspan="4">
				Unit: RRS Unit-&nbsp;<input type="text" name="b">
			</td>
		</tr>
		<tr>
			<td>Issue No.</td>
			<td><input type="text" name="c"></td>
			<td>Date:</td>
			<td><input type="text" name="d"></td>
			<td>Revision No.</td>
			<td><input type="text" name="e"></td>
			<td>Date:</td>
			<td><input type="text" name="f"></td>
		</tr>
	</table>
</div>
<br><br>
<div>
	<table>
		<tr>
			<td>IMS Objectives</td>
			<td>Impacts/Hazards</td>
			<td>Target Year&nbsp;<input type="text" required name="g"></td>
			<td>IMS Programme/Action Plan</td>
			<td>Responsibility</td>
			<td>Review Completion Period</td>
			<td>Performance Indicator</td>
			<td>Resources</td>
			<td>Remarks</td>
		</tr>
		<tr>
			<td><input type="text" required name="h"></td>
			<td><input type="text" required name="i"></td>
			<td><input type="text" required name="j"></td>
			<td><input type="text" required name="k"></td>
			<td><input type="text" required name="l"></td>
			<td><input type="text" required name="m"></td>
			<td><input type="text" required name="n"></td>
			<td><input type="text" required name="o"></td>
			<td><input type="text" required name="p"></td>
		</tr>
	</table>
</div>
<br>
<div>
	<p><i><h5>Note:&nbsp;</h5>This format is for Objective, Targets, Performance indicator & Improvement Programme. This will be prepared every financial year.</i<>/p>
</div>
<br><br>
<div>
	<table>
		<tr>
			<td>Prepared By</td>
			<td>Checked By</td>
			<td>Concurred By</td>
			<td>Reviewed By</td>
			<td>Approved By</td>
			<td>Issued By</td>
			<td>Copy Status</td>
		</tr>
		<tr>
			<td><input type="text" required name="q"></td>
			<td><input type="text" required name="r"></td>
			<td><input type="text" required name="s"></td>
			<td><input type="text" required name="t"></td>
			<td><input type="text" required name="u"></td>
			<td><input type="text" required name="v"></td>
			<td><input type="text" required name="w"></td>
		</tr>
		<tr>
			<td>Sectional Coordinator</td>
			<td>Section Head</td>
			<td>MR(S)</td>
			<td>Chief Superintendent</td>
			<td>Station Director</td>
			<td>Section Head</td>
			<td></td>
		</tr>
	</table>
</div>
<br><br>
<div style="text-align: center;">
        <button name = "btn" style="height: 30px; width: 80px; font-size: 1em; box-shadow: 5px 5px 10px #707070;border-radius: 15px;margin-right:2%">Next</button>
        <input type="reset" style="height: 30px; width: 80px; font-size: 1em; box-shadow: 5px 5px 10px #707070;border-radius: 15px;">
</form>
</div>
</body>
</html>