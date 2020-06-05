<?php
    class DataBase
    {
       var $dbHostName="localhost";
	   var $dbUserName="root";
	   var $dbPassword='';
	   var $dbName="blog";
	   var $dbLink='';
	
	   
	   
	   function DataBase_Mysqli($hName,$hUser,$hPassword,$hdb)
	    {
		  global $dbconn;
		  $this->dbHostName=$hName;
		  $this->dbUserName=$hUser;
		  $this->dbPassword=$hPassword;
		  $this->dbName=$hdb;
		  
		  
		  $this->dbLink=mysqli_connect($this->dbHostName,$this->dbUserName,$this->dbPassword) or die("Not able to connect to database".mysqli_error());
		  mysqli_select_db($this->dbLink,$this->dbName) or die("Unknown Database ".$this->dbName."  ".mysqli_error($this->dbLink));
		  $dbconn = $this->dbLink;
		  return $this->dbLink;
		  
		} 
	  	
    }
   
?>