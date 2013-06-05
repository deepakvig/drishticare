<?php
Class DataBase
{
	var $Connection;
	var $Result;
	# Constructor of Class. Makes a Connection with the DataBase
	function DataBase(){
		$Database = $GLOBALS['Configuration']['DataBase'];
		$HostName = $GLOBALS['Configuration']['HostName'];
		$UserName = $GLOBALS['Configuration']['UserName'];
		$Password = $GLOBALS['Configuration']['Password'];
		$this->Connection =  mysql_connect ($HostName,$UserName,$Password) or die ('Unable to Connect to the Database. Please Check the Configuration File');
		mysql_select_db($Database);

	}

	# Open the Connection to the DataBase
	function OpenDataBaseConnection() {
		return $this->Connection;
	}

	# Gracefully Closes the Connection
	function CloseDataBaseConnection()
	{
		mysql_close($this->Connection);
	}

	# Executes the Query on the DataBase, Only Select
	function ExecuteQuery($Query){
		$this->Result = mysql_query($Query,$this->Connection);
		if (!$this->Result) {
			die('Invalid Query: '.mysql_error());
			return "Invalid Query";
		}
		return $this->Result;
	}
	function FetchResult (){
		for($i = 0; $ReturnArray[$i] = mysql_fetch_assoc($this->Result); $i++)
		{
		}
		array_pop($ReturnArray);
		return $ReturnArray;
	}
	# Get number of Rows in the Result
	function NumberOfRows(){
		if ($this->Result != false)
		{
			return mysql_num_rows($this->Result);
		}
		return null;
	}

	# Get Number of Rows Affected due to Update or Insertion
	function NumberofAffectedRows()
	{
		return mysql_affected_rows();
	}

	# Execute Update or Insert Queries
	function ExecuteInsertOrUpdate($Query)
	{
		$this->Result = mysql_query($Query,$this->Connection);
		return ($this->NumberofAffectedRows() > 0);
	}

	# Escaping String 
	function EscapeString($text)
	{
		return mysql_real_escape_string($text);
	}
}
?>
