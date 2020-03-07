<?php
error_reporting(0);

echo '<html>
<head>
	<meta charset="utf-8">
	<title>Pagelinks ~ z3r0fy</title>
	<link rel="stylesheet" href="https://zer0fy.github.io/z3/style.css">
</head>
<body>
<center>
	<div style="color : White">
<form name ="at" method="post">
	<h1 style="color: White">Link Scan</h1>
	<h4 style="color: White">Codder : z3r0fy</h4>
	<input id ="form" type="text" name="hedef" placeholder="Site.com" required=""><br><br>
	<button id = "form" type="submit" name="sik">START</button>
</form>';

if (isset($_POST['sik'])) {

unlink("result.txt");
$hedef = $_POST['hedef'];
$api = "http://api.hackertarget.com/pagelinks/?q=" ;
$saksocu = "result.txt";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api.$hedef);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_USERPWD, "user:pass");
$result = curl_exec($ch);
curl_close($ch);
$memo = fopen($saksocu,'w');
fwrite($memo,$result);
fclose($memo);
echo '<center><p>Dosya Olusturuldu : </p><a href=result.txt target="_blank">TIKLA</a></center>';
}
?>

