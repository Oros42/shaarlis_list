<!DOCTYPE <html>
<head>
	<title>Liste des shaarlis opérationnels</title>
	<meta charset='utf-8'>
	<meta name="robots" content="noindex, nofollow">
	<style type="text/css">
		body{
			background-color: #ececec;
			color: black;
		}
		a{
			color: #11a101
		}
		header{
			background-color: white;
			border-color: #e1e1e1;
			border-radius: 0;
			border-style: solid;
			border-width: 1px;
			padding: 0 10px;
		}
		article{
			background-color: white;
			border-color: #cccccc;
			border-radius: 0;
			border-style: solid;
			border-width: 1px;
			margin-top: 10px;
			padding: 10px 10px;

		}
		section{
			background-color: #f5f5f5;
			border-color: #cccccc;
			border-radius: 0;
			border-style: solid;
			border-width: 1px;
			padding: 0 10px;
			overflow-y: auto;
		}
	</style>
</head>
<body>
	<header><?php
		$file=@file_get_contents("shaarlis.json") or die("Error to open shaarlis.json!");
		$json=@json_decode($file, true) or die("Not a json file!");
		echo "<p>Nombre de shaarlis opérationnels : ".count($json)."<br>\n";
		echo "Date de modification : " . date ("d/m/Y H:i:s", filemtime("shaarlis.json"));
?><br>
	Fichiers : <a href="shaarlis.json">JSON</a> <a href="shaarlis.opml">OPML</a></header>
<?php
$num=1;
foreach ($json as $url => $data) {
	echo "<article>$num)<br>\n".$data['text']."<br>\nURL : <a href='".$data['htmlUrl']."'>".$data['htmlUrl']."</a><br>XML : \n<a href='".$url."'>".$url."</a>\n";
	echo "</article>";
	$num++;
}
?>
</body>
</html>