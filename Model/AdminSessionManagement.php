<?php

//declare(strict_types=1);
require_once("admin.php");

class AdminSessionManagement
{

	public const AdminSessionKey = "Admin";

	public static function HandleAdminAccess()
	{
		if (self::AdminIsNotLoggedIn())
		{
			echo "<h1>No User logged in, redirecting...</h1>";
//			header('Location: ../Login/mangment-login.php');
		}
		else
		{
			echo "<h1>Welcome " . gettype(self::GetCurrentAdmin()) . ".</h1>";
			echo "<h1>Welcome " . var_dump(self::GetCurrentAdmin()) . ".</h1>";
			///echo "<h1>Welcome " . self::GetCurrentAdmin()->getUsername() . ".</h1>";
		}
	}

	public static function AdminIsLoggedIn(): bool
	{
		return self::GetCurrentAdmin() != null;
	}

	public static function AdminIsNotLoggedIn(): bool
	{
		return self::GetCurrentAdmin() == null;
	}
	
	public static function GetCurrentAdmin()//: ?admin
	{
		if (isset($_SESSION[self::AdminSessionKey]))
			return $_SESSION[self::AdminSessionKey];
		else
			return null;
	}

	public static function LoginAdmin(admin $admin)
	{
		$_SESSION[self::AdminSessionKey] = $admin;
	}

	public static function LogoutCurrentAdmin()
	{
		echo'<h1>logout called</h1>';
		$_SESSION[self::AdminSessionKey] = null;
	}

}
