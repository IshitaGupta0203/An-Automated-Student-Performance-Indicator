<?php

if(isset($_POST["Submit"]))
{
$host="localhost"; // Host name.
$db_user="root"; //mysql user
$db_password=""; //mysql pass
$db='dbschool'; // Database name.
$conn=mysqli_connect($host,$db_user,$db_password) or die (mysql_error());
mysqli_select_db($conn,$db) or die (mysql_error());


/*$con=mysqli_connect($host,$db_user,$db_password,$db);
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
*/

$filename=$_FILES["file"]["name"];
$ext=substr($filename,strrpos($filename,"."),(strlen($filename)-strrpos($filename,".")));
extract ($_FILES["file"]);
$x=1;
while(file_exists("ExcelFiles/".$name))
{
	$x++; 

	$name=substr($name,0,strpos($name,"."))."_".$x.".csv";
	//echo $name;

}


copy ($tmp_name,"ExcelFiles/".$name);

$filename="ExcelFiles/$name";
$tablename=substr($name,0,strpos($name,"."));

//we check,file must be have csv extention
if($ext==".csv")
{
 	 $file = fopen($filename, "r");
	 $emapData = fgetcsv($file, 10000, ",");

          $strstart="create table $tablename (";
	  $str="";

	  for($i=0;$i<count($emapData)-1;$i++)
	     { 

		$columnname=str_replace(" ","_",$emapData[$i]);
		$columnname=str_replace(".","",$columnname);

		$str=$str.$columnname." varchar(30),"; 	
		
	      }
     
	$str=$str.$emapData[$i]; 	

	$strend=$str." varchar(30))";
	$str=$strstart.$strend;
	//echo $str;
	mysqli_query($conn,$str);	
	$emapData = fgetcsv($file, 10000, ",");
	while (	 ($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
         {
	if($emapData[0]!="")
	{
	$sql = "INSERT into $tablename values('";	
           
	  for($i=0;$i<count($emapData)-1;$i++)
	     { 

           	$sql=$sql.$emapData[$i]."','";
	     }
		$sql=$sql.$emapData[$i]."'";
	$sql=$sql.")";  
	//echo $sql;	 
	mysqli_query($conn, $sql);
	}
        }
//mysqli_query($con, $sql);                
 fclose($file);

         echo "       CSV File has been successfully Imported!!!";
         header("refresh:2;url=studdetail.php");
}
else {
    echo "Error: Please Upload only CSV File";
}

}
?>