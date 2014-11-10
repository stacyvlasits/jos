<? class mysql {

  function Connect($host, $name, $pass, $db){

  $connection = mysql_connect("$host",
  "$name",
  "$pass",
  false,
  MYSQL_CLIENT_SSL);
  mysql_select_db("$db", $connection);

  }//ends the connection function

  function Close(){

  mysql_close($this->connection);

  }//ends the close function

  function FetchRow($query){
  $rows = mysql_fetch_row($query);
  return $rows;
  }

  function FetchArray($query){
  $array = mysql_fetch_array($query);
  return $array;
  }

  function FetchNum($query){
  $num = mysql_num_rows($query);
  return $num;
  }

  function Query($sql){
  $query = mysql_query($sql) or die();
  return $query;
  }//ends the query function

  }//ends the class
  ?>
