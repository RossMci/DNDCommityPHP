<?php

require_once("User.php");
require_once("UserAccessLevel.php");

class UserSessionManagement
{
	const UserSessionKey= "User";

	public static function HandleAdminUserAccess()
	{
		if (self::UserIsNotLoggedIn())
		{
			echo "<h1>No User logged in, redirecting... redirect failed.  Security breached.<h1>";
		}
		else
		{
			$user = self::GetCurrentUser();
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

	public static function GetCurrentUser(): ?User
	{
		if (isset($_SESSION[self::UserSessionKey]))
			return $_SESSION[self::UserSessionKey];
		else
			return null;
	}

	public static function LoginUser(User $user)
	{
		$_SESSION[self::UserSessionKey] = $user;
	}

	public static function LogoutCurrentUser()
	{
		$_SESSION[self::UserSessionKey] = null;
	}

}