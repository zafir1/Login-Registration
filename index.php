<?php 
	require_once('core/init.php');

	$userUpdate = DB::getInstance()->update('users',3,array(
			'username' => "Nazir",
			'password' => "newpassword",
			'salt' => "newsalt" 
		));

	//$user = DB::getInstance()->query("SELECT username FROM usersz WHERE username = ?",array("zafir"));
	/*$user = DB::getInstance()->query("SELECT * FROM `users`");

	if(!$user->count())
	{
		echo "NO user";
	}
	else
	{
		echo $user->first()->username;
	}*/
	
?>