<?php

declare(strict_types=1);
require_once("admin.php");

class AdminSessionManagement
{

	public const AdminSessionKey = "user";

	public static function HandleAdminAccess()
	{
		if (!self::AdminIsLoggedIn())
		{
			header('Location: ../Login/mangment-login.php');
//			echo "<h1>No User logged in, redirecting...<h1>";
		}
	}

	public static function AdminIsLoggedIn(): bool
	{
		return self::GetCurrentAdmin() != null;
	}

	public static function GetCurrentAdmin(): ?UserAccount
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
		$_SESSION[self::AdminSessionKey] = null;
	}

}
