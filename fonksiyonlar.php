<?php

function login($kadi,$sifre)
{
	global $db;
	if(!$kadi || !$sifre){
		return null;					
	}else
	{
		$v = $db -> prepare("select * from user where userName=? and password=? ");
		$v -> execute(array($kadi,$sifre));
	}
	return $v;
}

function personelEkle($adi,$soyadi)
{
	global $db;
	if(!$adi || !$soyadi)
	{
		return null;					
	}
	else
	{
	$insert= $db->prepare("INSERT INTO personnel SET perName= ?, perSurname= ?");
	$insert -> execute(array($adi,$soyadi));
	}
	return $insert;
}

function kullaniciEkle($user,$pass,$yetki)
{
	global $db;
	$uzunluk = strlen($pass);
	if($user==null || $pass==null || $yetki==null)
	{
		return null;					
	}
	if($uzunluk >6) 
	{
		$insert = $db -> prepare("insert into user set userName = ? , password = ? , autID = ?");
		$insert -> execute(array($user,$sifre,$yetki));
		if($insert)
		{
			return 1;
		}
		else 
		{
			return 2;
		}			
	}
	else
	{
		return 3;
	}
}
?>