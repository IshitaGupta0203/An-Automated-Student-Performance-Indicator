<!DOCTYPE html>
<html>
<head>
<style>

.cities
 {
  background-color: black;
  color: white;
  margin: 10px;
  padding: 10px;
 }

</style>
</head>
<body>
<center>
<div class="cities">
  <h2>IMPORT YOUR CSV FILE </h2></div></center>

<form enctype="multipart/form-data" method="post" action="import_excel.php">
<center>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
<table border="5">
<tr >
<td colspan="2" align="center"><strong>Import CSV file</strong></td>
</tr>
<tr>
<td align="center">CSV File:</td><td><input type="file" name="file" id="file"></td></tr>
<tr >
<td colspan="2" align="center"><input type="Submit" value="Submit" name=Submit></td>
</tr>
</center>
</table>
</form>
</center>
</form>
</body>
</html>