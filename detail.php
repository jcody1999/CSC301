<?php
$file=file_get_contents('pets.json');
$pets=json_decode($file, true);

function jsonToArray($file){
	return json_decode(file_get_contents($file), true);
}

if(!isset($_GET['id'])){
	echo 'Please enter the id of a member or visit the <a href="index.php">index page</a>.';
	die();
}

if($_GET['id']<0 || $_GET['id']>count($pets)-1){
	echo 'Please enter the id of a member or visit the <a href="index.php">index page</a>.';
	die();
}

$title= $pets[$_GET['id']]['name'];

require('header.php');
?>
		<h1><?= $pets[$_GET['id']]['name'] ?></h1>
		<p><?= "Age: ".$pets[$_GET['id']]['age'] ?></p>
		<img src="<?= $pets[$_GET['id']]['picture'] ?>" width="500"/>
		<p><?= $pets[$_GET['id']]['bio'] ?></p>
		<?php require('footer.php');?>
	