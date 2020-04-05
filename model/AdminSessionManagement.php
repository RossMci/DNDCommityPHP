<?php

//declare(strict_types=1);
require_once("admin.php");
require_once ("UserAccessLevel.php");

use admin as UserAccount;

class UserSessionManagement
{

	public static function HandleAdminUserAccess()
	{
		if (self::UserIsNotLoggedIn())
		{
			echo "<h1>No User logged in, redirecting... redirect failed.  Security breached.<h1>";
		}
		else
		{
			$user = GetCurrentUser();
			if ($user->getUserAccessLevel() != UserAccessLevel::Admin)
			{
				echo "<h1>User has entered a restricted area for Admins only.<h1>";
			}
		}
	}

	public static function HandleUserAccess()
	{
		if (self::UserIsNotLoggedIn())
		{
			echo "<h1>No User logged in, redirecting... redirect failed.  Security breached.<h1>";
		}
	}

	public static function UserIsNotLoggedIn(): bool
	{
		return self::GetCurrentUser() == null;
	}

	public static function UserIsLoggedIn(): bool
	{
		return self::GetCurrentUser() != null;
	}

	public static function GetCurrentUser(): ?UserAccount
	{
		if (isset($_SESSION[SessionKeys::User]))
			return $_SESSION[SessionKeys::User];
		else
			return null;
	}

	public static function LoginUser(UserAccount $userAccount)
	{
		$_SESSION[SessionKeys::User] = $userAccount;
	}

	public static function LogoutCurrentUser()
	{
		$_SESSION[SessionKeys::User] = null;
	}

}

class AdminSessionManagement
{

	public const AdminSessionKey = "Admin";

	public static function HandleAdminAccess()
	{
		if (self::AdminIsNotLoggedIn())
		{
//			echo "<h1>No User logged in, redirecting...</h1>";
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
//		echo'<h1>logout called</h1>';
		$_SESSION[self::AdminSessionKey] = null;
	}

}
