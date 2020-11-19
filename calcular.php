<?php
	$HEMA=$_POST['HEMA'];
	$iMC=$_POST['iMC'];
	$DP=$_POST['DP'];

	if ($HEMA>44 && $iMC>30 && $DP=='YES'){
		$res ="Positive";
	}else{
		$res="Negative";
	}

		
	$res= $res;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Resultado</title>
	<link rel="stylesheet" href="CSS/estilo.css">

	<style type="text/css">
	  h3{ text-align:left;  font:18px "Arial"; color:white;}
	   .centrar{text-align:center;}
	</style>
</head>

<body>
	<h1>PROCESO</h1>
	<br>
	<p class ="centrar" STYLE="backgrond:blue;color:blue;border:double;"> THE PANC 3 SCORE PREDICTING SEVERITY OF ACUTE PANCREATITIS </p>
	<br>
	<br>
	<p> HEMATOCRITO= <?php echo $HEMA;?></p>
	<p>IMC= <?php echo $iMC;?></p>
	<p>DERRAME PLEURAL= <?php echo $DP;?></p>
	<h3 class="centrar">RESULT= <?php echo $res;?></h3>

	<p class ="centrar" STYLE="backgrond:blue;color:white;border:double;"> Results:
Out of 64 patients diagnosed with acute pancreatitis, 58 met the inclusion criteria. The PANC 3 score was positive in five 
cases (8.6%), pancreatitis progressed to a severe form in 10 cases (17.2%) and five patients (8.6%) died. 
Patients with a positive score and severe pancreatitis required intensive care more often, 
and stayed for a longer period in intensive care units. The PANC 3 score showed sensitivity of 50%, specificity of 100%, 
accuracy of 91.4%, positive predictive 
value of 100% and negative predictive value of 90.6% in prediction of severe acute pancreatitis.</p>
<br>
<br>
<br>
<div align="center"><img src="imagen.jpg"></div>
</body>
</html>