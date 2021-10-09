<?php
session_start();
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