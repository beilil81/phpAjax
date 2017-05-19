<?php
session_start();
require 'config/config.php';
$url = "tp-page-web";

if(isset($_POST['donnees'])) {
	$donnees = json_encode($_POST['donnees']);

	$req = $mysql->prepare("UPDATE content SET content = :donnees WHERE url = :url");
	$req->bindParam(':donnees', $donnees, PDO::PARAM_STR);
	$req->bindParam(':url', $url, PDO::PARAM_STR);

	$update = $req->execute();
	if($update) {
		echo'update réussi';
	} else {
		echo'échec update';
	}
}
?>