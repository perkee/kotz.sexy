<?php 
error_reporting(E_ALL);
ini_set('display_errors', 'On');

$query_string = substr( $_SERVER['QUERY_STRING'], 1 );
//echo $query_string;
$insert = <<<'EOD'
<img id="sexy-ted" src="http://kotz.sexy/ted-lilith.jpg" width="389"/>
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<style>
	body { padding-left: 400px; }
	h1, h2, h3, h4, h5, h6 { font-family: 'Lobster'; }
	#sexy-ted { position: fixed; left: 10px; top:10px; }
</style>
EOD;

$content = file_get_contents("http://tyrfing.org/$query_string", false);
$content = str_replace('<body>', '<body>'.$insert, $content);
echo $content;

?>

