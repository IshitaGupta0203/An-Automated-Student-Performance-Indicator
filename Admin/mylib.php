<?php
session_start();
error_reporting("null");
class mylib
{
	public $con=null;
	function __construct()
	{
	$this->con=mysqli_connect("localhost","root","","dbschool");
	}
	function dml($qry)
	{
		$q=mysqli_query($this->con,$qry);
		if($q==1)
		{
			return "1";
		}
		else
		{
			return "0";
		}
		
		}
	function runquery($qry)
	{
		$q=mysqli_query($this->con,$qry);
		return $q;
		
	}
	function exists($qry)
	{

		$q=mysqli_query($this->con,$qry);
		if(mysqli_num_rows($q)>0)
		{
			return "1";
		}
		else
		{
			return "0";
		
		}
	}

	function fetch($qry)
	{

		$q=mysqli_query($this->con,$qry);
		return $q;
	}
	
	function filldropdown($cmbname,$qry,$svalue,$dvalue)
	{
		?>
		<select class="form-control" name="<?php echo $cmbname?>">
			<?php
			$q=mysqli_query($this->con,$qry);
			while ($r=mysqli_fetch_array($q)) {
				?>
				<option value="<?php echo $r[$dvalue];?>">
					<?php echo $r["$svalue"];?>
					</option>
					<?php
						}
				?>
		</select>


		<?php

	}



	function file($path)
	{

		$target_dir = "$path/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	    echo "Sorry, file already exists.";
	    $uploadOk = 0;
	}
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 5000000000000) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	    $a=$_FILES["fileToUpload"]["name"];
	    return $a;
	}
	}


		function fileupload($path)
	{
		$imgs=rand(1000,100000)."-".$_FILES['imgs']['name'];
		$pic_loc=$_FILES['imgs']['tmp_name'];
		$folder=$path."/";
		if (move_uploaded_file($pic_loc,$folder.$imgs)){
			return $folder.$imgs;
			?><?php
		}
	}
	function filltextbox($txtname,$qry,$svalue)
	{
		
		$q=mysqli_query($this->con,$qry);
		$r=mysqli_fetch_array($q);
			?>
			<input type="text" name="<?=$txtname?>" value="<?=$r[$svalue]?>">
			<?php
			# code...
		
		
	}
	function filllabel($qry,$svalue)
	{
		
		$q=mysqli_query($this->con,$qry);
		$r=mysqli_fetch_array($q);
		echo	$r[$svalue];
			
		
	}
	function fillcheckbox($txtname,$qry,$val,$name,$show)
{
?>

<?php 
$q=mysqli_query($this->con,$qry);
while($r=mysqli_fetch_array($q))
{
extract($r);
?>
<input type="checkbox"  name="<?php echo $name;?>[]" value="<?php echo $$val;?>"><?php echo $$show;?><br><br>
<?php

}
}
	
}