<?php 
error_reporting(E_ALL);
ini_set('display_errors', 'On');

$query_string = substr( $_SERVER['QUERY_STRING'], 1 );
//echo $query_string;
$insert = <<<EOD
<figure id="sexy-ted">
	<img src="http://kotz.sexy/ted-lilith.jpg" width="389"/>
	<figcaption><span class="artwork-title">IshTed</span>
	by
	<a rel="external" href="http://perk.ee">perkee</a></figcaption>
</figure>
<a rel="external" href="https://github.com/AaronTraas/kotz.sexy"><img style="position: fixed; top: 0; left: 0; border: 0;" src="https://camo.githubusercontent.com/8b6b8ccc6da3aa5722903da7b58eb5ab1081adee/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f6f72616e67655f6666373630302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_left_orange_ff7600.png"></a>
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<style>
	body { padding-left: 400px; }
	h1, h2, h3, h4, h5, h6 { font-family: 'Lobster'; }
	#sexy-ted { position: fixed; left: 10px; top:10px; margin:0; }
	#sexy-ted figcaption { text-align: center; }
	.artwork-title{font-style:italic}
</style>
EOD;

$content = file_get_contents("http://tyrfing.org/$query_string", false);
$content = str_replace('<body>', '<body>'.$insert, $content);
echo $content;

?>

