<?php

$link = mysqli_connect("localhost", "root", "qwerty", "authentication");

if(isset($_POST['btn'])) {

	if(!empty($_POST['a']) && !empty($_POST['b']) && !empty($_POST['c']) && !empty($_POST['d']) && !empty($_POST['e']) && !empty($_POST['f']) && !empty($_POST['g']) && !empty($_POST['h']) && !empty($_POST['i']) && !empty($_POST['j']) && !empty($_POST['k']) && !empty($_POST['l']) && !empty($_POST['m']) && !empty($_POST['n']) && !empty($_POST['o']) && !empty($_POST['p']) && !empty($_POST['q']) && !empty($_POST['r']) && !empty($_POST['s'])) {

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
		
		$query = "INSERT INTO `table4` (a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u, v, w) VALUES ('$a', '$b', '$c', '$d', '$e','$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$o', '$p', '$q', '$r', '$s')";

		mysqli_query($link, $query);
		echo "<script> alert('Successfully entered! You will be loggeg out successfully.');";
		echo "location.href='login.php'; </script>";

	} 
} 

?>

<!DOCTYPE html>
<html>
<head>
	<title>page4</title>
	
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
		<td colspan="2">R16-IMS-6.1.3-MR(S)-COR-ANEX.-P-B101</td>
	  </tr>
	  <tr>
		<td rowspan="2">Sub-topic</td>
		<td rowspan="2">Station Compliance Obligations Register(Legal)</td>
		<td>Revision No.</td>
		<td>00</td>
		<td>Date</td>
		<td>01.02.2018</td>
		<td rowspan="2">Page No.</td>
		<td rowspan="2">28 of 67</td>
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
			<td colspan="8">
				Unit: RRS Unit-&nbsp;<input type="text" name="a">
			</td>
		</tr>
		<tr>
			<td>Issue No.</td>
			<td><input type="text" name="b"></td>
			<td>Date:</td>
			<td><input type="text" name="c"></td>
			<td>Revision No.</td>
			<td><input type="text" name="d"></td>
			<td>Date:</td>
			<td><input type="text" name="e"></td>
		</tr>
	</table>
</div>
<br><br>
<div>
	<table>
		<tr>
			<td>Legislation Reference</td>
			<td>Content</td>
			<td>Issuing Authority</td>
			<td>Renewal Frequency</td>
			<td>Responsibility(Accessing, Updating & Renewal)</td>
			<td>Applicable to Station/Section</td>
			<td>Validity</td>
			<td>Remarks</td>
		</tr>
		<tr>
			<td><input type="text" name="f" required></td>
			<td><input type="text" name="g" required></td>
			<td><input type="text" name="h" required></td>
			<td><input type="text" name="i" required></td>
			<td><input type="text" name="j" required></td>
			<td><input type="text" name="k" required></td>
			<td><input type="text" name="l" required></td>
			<td><input type="text" name="m" required></td>
		</tr>
	</table>
</div>
<br><br>
<div>
	<table>
		<tr>
			<td>Prepared By</td>
			<td>Reviewed By</td>
			<td>Concurred By</td>
			<td>Approved By</td>
			<td>Issued By</td>
			<td>Copy Status</td>
		</tr>
		<tr>
			<td><input type="text" name="n" required></td>
			<td><input type="text" name="o" required></td>
			<td><input type="text" name="p" required></td>
			<td><input type="text" name="q" required></td>
			<td><input type="text" name="r" required></td>
			<td><input type="text" name="s" required></td>
		</tr>
		<tr>
			<td>ENC(WMF)</td>
			<td>Superintendent(WMF)</td>
			<td>Chief Superintendent</td>
			<td>Station Director</td>
			<td>Superintendent(WMF)</td>
			<td></td>
		</tr>
	</table>
</div>
<br><br>

<div style="text-align: center;">
        <button name="btn" style="height: 30px; width: 80px; font-size: 1em; box-shadow: 5px 5px 10px #707070;border-radius: 15px;margin-right:2%">Submit</button>
        <input type="reset" style="height: 30px; width: 80px; font-size: 1em; box-shadow: 5px 5px 10px #707070;border-radius: 15px;">
</form>
</div>
</body>
</html>