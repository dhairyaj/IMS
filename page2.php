<?php

$link = mysqli_connect("localhost", "root", "qwerty", "authentication");

if(isset($_POST['btn'])) {

	if(!empty($_POST['a']) && !empty($_POST['b']) && !empty($_POST['c']) && !empty($_POST['d']) && !empty($_POST['e']) && !empty($_POST['f']) && !empty($_POST['g']) && !empty($_POST['h']) && !empty($_POST['i']) && !empty($_POST['j']) && !empty($_POST['k']) && !empty($_POST['l']) && !empty($_POST['m']) && !empty($_POST['n']) && !empty($_POST['o']) && !empty($_POST['p']) && !empty($_POST['q']) && !empty($_POST['r']) && !empty($_POST['s']) && !empty($_POST['t']) && !empty($_POST['u']) && !empty($_POST['v']) && !empty($_POST['w']) && !empty($_POST['x']) && !empty($_POST['y']) && !empty($_POST['z']) && !empty($_POST['aa'])) {

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
		$x = mysqli_real_escape_string($link, $_POST['x']);
		$y = mysqli_real_escape_string($link, $_POST['y']);
		$z = mysqli_real_escape_string($link, $_POST['z']);
		$aa = mysqli_real_escape_string($link, $_POST['aa']);

		$query = "INSERT INTO `table2` (a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u, v, w, x, y, z, aa) VALUES ('$a', '$b', '$c', '$d', '$e','$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$o', '$p', '$q', '$r', '$s', '$t', '$u', '$v', '$w' '$x' '$y' '$z' '$aa')";

		mysqli_query($link, $query);
		echo "<script> alert('Successfully entered!');";
		echo "location.href='page3.php'; </script>";

	} 
} 

?>

<!DOCTYPE html>
<html>
<head>
	<title>page2</title>

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
		<td colspan="4">Doc.Ref.No.</td>
		<td colspan="2">R16-IMS-6.1.1-MR(S)-EA-ANEX.-P-B101</td>
	  </tr>
	  <tr>
		<td rowspan="2">Sub-topic</td>
		<td rowspan="2">Identification Analysis and Prioritization of Environmental Aspects/Impacts</td>
		<td>Revision No.</td>
		<td>01</td>
		<td>Date</td>
		<td>27.03.2018</td>
		<td rowspan="2">Page No.</td>
		<td rowspan="2">18 of 67</td>
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
			<td rowspan="2">Activity</td>
			<td rowspan="2">Aspect</td>
			<td rowspan="2">Impact</td>
			<td rowspan="2">Control of D/I</td>
			<td rowspan="2">Situation of N/AN/E</td>
			<td colspan="3">Qualitative Evaluation</td>
			<td colspan="4">Quantitative Evaluation</td>
			<td rowspan="2">Priority Rank</td>
			<td rowspan="2">Significance Y/N</td>
			<td rowspan="2">Remarks</td>
		</tr>
		<tr>
			<td>Compliance Obligation</td>
			<td>Business Concern</td>
			<td>Interested Party Concern</td>
			<td>A</td>
			<td>B</td>
			<td>C</td>
			<td>Total<br>(A x B x C)</td>
		</tr>
		<tr>
			<td><input type="text" name="g" required></td>
			<td><input type="text" name="h" required></td>
			<td><input type="text" name="i" required></td>
			<td><input type="text" name="j" required></td>
			<td><input type="text" name="k" required></td>
			<td><input type="text" name="l" required></td>
			<td><input type="text" name="m" required></td>
			<td><input type="text" name="n" required></td>
			<td><input type="text" name="o" required></td>
			<td><input type="text" name="p" required></td>
			<td><input type="text" name="q" required></td>
			<td><input type="text" name="r" required></td>
			<td><input type="text" name="s" required></td>
			<td><input type="text" name="t" required></td>
			<td><input type="text" name="u" required></td>
		</tr>
	</table>
</div>
<br>
<div>
	<p><i><h5>Note:&nbsp;</h5><b>Any activity/environmental aspect having quantitative evaluation score of equal to more than 20 shall be considered as significant environmental aspect. Also any activity/environmental aspect having compliance obligation (e.g. air pollution, water pollution, land pollution, etc.) shall also be considered as significant environmental aspect.</b></i></p>
</div>
<br><br>
<div>
	<table>
		<tr>
			<td>Prepared By</td>
			<td>Checked By</td>
			<td>Concurred By</td>
			<td>Approved By</td>
			<td>Issued By</td>
			<td>Copy Status</td>
		</tr>
		<tr>
			<td><input type="text" name="v" required></td>
			<td><input type="text" name="w" required></td>
			<td><input type="text" name="x" required></td>
			<td><input type="text" name="y" required></td>
			<td><input type="text" name="z" required></td>
			<td><input type="text" name="aa" required></td>
		</tr>
		<tr>
			<td>Sectional Coordinator</td>
			<td>Section Head</td>
			<td>MR(S)</td>
			<td>Group Head</td>
			<td>Section Head</td>
			<td></td>
		</tr>
	</table>
</div>
<br><br>
<div style="text-align: center;">
        <button name="btn" style="height: 30px; width: 80px; font-size: 1em; box-shadow: 5px 5px 10px #707070;border-radius: 15px;margin-right:2%">Next</button>
        <input type="reset" style="height: 30px; width: 80px; font-size: 1em; box-shadow: 5px 5px 10px #707070;border-radius: 15px;">
</form>
</div>
</body>
</html>