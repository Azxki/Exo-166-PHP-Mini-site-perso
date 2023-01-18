<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent() {
	if(!isset($_GET['page'])){
		include dirname(__DIR__, 1).'/pages/home.php';
	}
	elseif(isset($_GET['page']) && $_GET['page'] == "bio") {

        include dirname(__DIR__, 1).'/pages/bio.php';
    }
	elseif(isset($_GET['page']) && $_GET['page'] == "contact") {

        include dirname(__DIR__, 1).'/pages/contact.php';
    }
}

function getPart($name) {
	include __DIR__ . '/../parts/'. $name . '.php';
}

function getUserData () {
    $json = file_get_contents('../data/user.json');
    $obj = json_decode($json);

    if(isset($_GET['page']) && $_GET['page'] == "bio") {
        echo $obj->name;
    }
}

