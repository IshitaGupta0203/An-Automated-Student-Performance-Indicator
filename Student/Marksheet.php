<html>
<head>
	 <style>

.cities
 {
  background-color: black;
  color: white;
  margin: 20px;
  padding: 10px;
 }

</style> 
<div class="cities" style="font-family: Times New Roman">
  <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SELECT  THE  TABLE  OF  WHICH  YOU  WANT  TO  PERFORMANCE  GRAPH</h2></div>
<link rel=stylesheet href=stl.css align=center >
<link rel=stylesheet href="css/bootstrap.min.css">

<body style="background-image:url(bck.jpg);" align=center>

<div style=" font-family:Times New Roman;position:absolute;margin-top:8px;margin-left:0% f" >
<form>
<h4><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter a Class Name/TableName</b></h4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name=tn >
<?php
$conn=mysqli_connect("localhost","root",""); 
mysqli_select_db($conn,"dbschool");
$q=mysqli_query($conn,"show tables");//are you change query??no.. is there original project with you 

while($tnm=mysqli_fetch_array($q))
{
	
echo "<option>";
echo "$tnm[0]</option>";
}
?>
</select>
<input type=submit value="View" Name=view>
</form>

<?php
if(isset($_GET['view']))
{
	
	$tn=$_GET['tn'];
	$con=mysqli_connect("localhost","root",""); 
	mysqli_select_db($con,"dbschool");
	$q=mysqli_query($con,"select * from $tn order by Percent desc ");
	echo "<table class=table >";
	while($r=mysqli_fetch_row($q))
	{
	 echo "<tr>";
		for($i=0;$i<count($r);$i++)
		echo "<td> $r[$i]</td>";
		echo "</tr>";
	}

	echo "</table>";
}
?>


</body>
</html>