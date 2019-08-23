<?php

class Database
{

private static $dbHost = "localhost";
private static $dbName = "Menu";
private static $dbUser = "root";
private static $dbUserPassword = "";

private static $connection = null;

public static function connect()
{
	try {

		self::$connection = new PDO("mysql:host=" .self::$dbHost .";dbname=" .self::$dbName,self::$dbUser,self::$dbUserPassword);


	} catch (PDOException $e) {
		die($e->getMessage());
	}
return self::$connection;
}

public static function disconnect()
  {
  self::$connection = null;
  }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>bootstrap</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


  </head>
<body>
  <nav class="navbar navbar-inverse  navbar-fixed-top">
        <div class="container">
					<?php

							 echo '<div class="collapse navbar-collapse" id="leMenu" style="margin-left:300px;" >

												 <ul class="nav navbar-nav ">';
								 $db = Database::connect();
								 $statement = $db->query('SELECT * FROM menu');
								 $menu = $statement->fetchAll();
								 foreach ($menu as $menu)

								 {
										 if($menu['id'] == '1')
											 echo '<li class="dropdown" class="active"><a href="#'  .$menu['id'] . '" data-toggle="dropdown">' .$menu['name'].'</a>';
											 else
											 echo '<li class="dropdown"><a href="#'  .$menu['id'] . '" data-toggle="dropdown">' .$menu['name'].' </a>';
								 }

								 echo '</ul>
										 </div>';
					 ?>
  </div>
</nav>



</body>


</html>
