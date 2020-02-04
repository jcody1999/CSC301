<?php
include('functions.php');
$pets=jsonToArray('pets.json');

$title='Pet Adoption';
require('header.php');
printHeader($title);
?>
   <h1>Pet Adoption</h1>
<?php
for($i=0;$i<count($pets);$i++){
showItem($i, $pets[$i]["picture"],$pets[$i]["name"],$pets[$i]["age"]);
	echo '<hr>';
}
require('footer.php');
?>