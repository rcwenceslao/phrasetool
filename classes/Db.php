
<?php

/**
 * 
 */
class Db 
{
	
	protected function connect()
	{
		//connection
		try {
    		$conn = new PDO("mysql:host=localhost;dbname=db538199618", 'root', 'rimpido');
    // set the PDO error mode to exception
    		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    		//echo "Connected successfully"; 
    		return $conn;
    		}
		catch(PDOException $e)
    		{
    		echo "Connection failed: " . $e->getMessage();
    		}

	}
}