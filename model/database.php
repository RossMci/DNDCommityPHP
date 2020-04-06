<?php
/**
 * Description of database
 *
 * @author ross1
 */
class database
{

	private static $dsn = 'mysql:host=localhost;dbname=dndcusers';
	private static $username = 'root';
	private static $password = 'letmein';
	private static $db;

	private function __construct()
	{
		
	}

	public static function getDB()
	{
		if (!isset(self::$db))
		{
			try
			{
				self::$db = new PDO(self::$dsn,
						self::$username,
						self::$password);
			}
			catch (PDOException $e)
			{
				$error_message = $e->getMessage();
				include('errors/database_error.php');
				exit();
			}
		}
		return self::$db;
	}

}

?>
<?php

$dsn = 'mysql:host=localhost;dbname=dndcusers';
$username = 'root';
$password = 'letmein';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
try
{
	$db = new PDO($dsn, $username, $password, $options);
}
catch (PDOException $e)
{
	$error = $e->getMessage();
	include('errors/error.php');
	exit();
}
?>