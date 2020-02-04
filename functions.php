<?php
function jsonToArray(string $file){
	return json_decode(file_get_contents($file), true);
}
function showItem($id, $picture, $name, $age, $body=null){
	if(!isset($body)) $body='<a href="detail.php?id='.$id.'">Visit profile</a>';
	echo '<div class="media">
  <img src="'.$picture.'" class="mr-3" alt="'.$name.' '. $age.'" width="96">
  <div class="media-body">
    <h5 class="mt-0">'.$name.'</br>'.' Age: '. $age.'</h5>
    '.$body.'
  </div>
</div>';
}
?>