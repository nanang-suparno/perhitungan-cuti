<?php
/*========================================
 *Tutor			: Master Mahrizal
 *Author		: Nanang Suparno
 *Description	: Program Perhitungan Cuti Hari kerja dengan konsep OOP
 *Date		    : 28 Agustus 2014
 *
 *========================================*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>cuti program</title>


	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #002166;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
		background-color: #D0D0D0;

	}
    label{
    	width:200px;
  		float: left;
  		padding: 6px;
	}
	</style>
</head>
<body>
<div id="container">
	<center><h1>Program Cuti</h1></center>

	<div id="body">
<form method="post" action="<?php echo base_url() ?>index.php/cuti/browse">
<div><p><label>Input Tanggal Awal </label> : <input type="text" name="awal"  placeholder="yyyy-mm-dd">
</div>
<div>
<p><label>Input Tanggal Akhir</label> : <input type="text" name="akhir" placeholder="yyyy-mm-dd">
</div>
<input type="submit" value="submit">
</form>
<hr>
Tanggal awal 	: <?php echo $awal ."</br>"?>
Tanggal Akhir 	: <?php echo $akhir ."</br>"?>
Cuti Yang Anda Ambil <?php echo $hasil ." ". "Hari " . "</br>"?>

<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>