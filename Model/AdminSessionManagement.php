<?php

declare(strict_types=1);
require_once("member.php");

class MemberSessionManagement
{

	public const MemberSessionKey = "user";

	public static function HandleMemberAccess()
	{
		if (!self::MemberIsLoggedIn())
		{
			header('Location: ../Login/Login.php');
//			echo "<h1>No User logged in, redirecting...<h1>";
		}
	}

	public static function MemberIsLoggedIn(): bool
	{
		return self::GetCurrentMember() != null;
	}

	public static function GetCurrentMember(): ?UserAccount
	{
		if (isset($_SESSION[self::MemberSessionKey]))
			return $_SESSION[self::MemberSessionKey];
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
