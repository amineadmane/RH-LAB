<?php
namespace app;
use core\DataBase\dataBase;
Class App{

	private static $db;
	private static $titre;
	public static function getDb()
	{
		if(self::$db === null)
		{
			require 'core/DataBase/database.php';
			self::$db = new database('rh');
		}
		return self::$db;
	}

	public static function notFound()
	{
		header("HTTP/1.0 404 notFound");
		header("Location:index.php?p=404");
	}

	public static function verification($id,$table)
		{
			if(isset($id))
			{
					$id = intval($id);
					if(0 < $id)
					$statement = 'SELECT id from ' .$table. '  WHERE id=?';
					$arguments[0] = $id;
					if(self::getDb()->prepare($statement,$arguments))
					{
						return true;
					}
			}
			header('location:?p=error');
		}

		public static function htmlspecialchars()
		{
			foreach ($_POST as $key => $value)
			{
				$_POST[$key] = htmlspecialchars($_POST[$key]);
			}
		}
}
