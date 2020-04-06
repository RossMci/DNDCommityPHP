<?php

/**
 * lists the user level types
 */
class UserAccessLevel
{

	public const Admin = 1;
	public const User = 2;
	public const AdminLabel = "Administrator";
	public const UserLabel = "User";

	public static function getLabelFromUser(User $user): string
	{
		return self::getLabel($user->getUserAccessLevel());
	}

	public static function getLabel($userAccessLevel): string
	{
		if ($userAccessLevel == self::Admin)
		{
			return self::AdminLabel;
		}
		else if ($userAccessLevel == self::User)
		{
			return self::UserLabel;
		}
		else
		{
			return "No access";
		}
	}

}
