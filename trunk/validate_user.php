<?php
$users = array("sd110","wk110","hr110");
$user = $_REQUEST["u"];
$is_exsit = false;

if($user == ""){
	echo "User name should not be null!";
	return;
}

foreach ($users as $u) {
    if($u == $user){
        $is_exsit = true;
	break;
    }
}

if($is_exsit){
   echo "This account has already been registed.";
}else{
   echo "success";
}
?>