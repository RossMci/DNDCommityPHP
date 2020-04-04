<?php

//declare(strict_types=1);
require_once("member.php");

class MemberSessionManagement
{

	public const MemberSessionKey = "member";

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

	public static function GetCurrentMember(): ?member
	{
		if (isset($_SESSION[self::MemberSessionKey]))
			return $_SESSION[self::MemberSessionKey];
		else
			return null;
	}

	public static function LoginMember(member $member)
	{
		$_SESSION[self::MemberSessionKey] = $member;
	}

	public static function LogoutCurrentMember()
	{
		$_SESSION[self::MemberSessionKey] = null;
	}

}
