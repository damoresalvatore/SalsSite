<?php    
$json = file_get_contents("http://sc2replaystats.com/api/accountReplays?hashkey=ccb3007c8de26d8&callback=?");
echo $json
?>