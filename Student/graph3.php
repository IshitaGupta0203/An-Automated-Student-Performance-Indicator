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
<div class="cities">
  <h2>SELECT  THE  TABLE  OF  WHICH  YOU  WANT  TO  DISPLAY  PERFORMANCE  GRAPH</h2></div>
<link rel=stylesheet href=stl.css>
<body style="background-image:url(bck.jpg);" align=center >

<div style="position:absolute;margin-top:5px;margin-left:0%">

<script type="text/javascript" src="js/fusioncharts.js"></script>
<script type="text/javascript" src="js/themes/fusioncharts.theme.fint.js?cacheBust=56"></script>
</center>
<?php
if(isset($_GET['view']))
{
	
	$tn=$_GET['tn'];
	?>
<script type="text/javascript">
    FusionCharts.ready(function(){
    var fusioncharts = new FusionCharts({
    type: 'mscolumn2d',
    renderAt: 'chart-container',
    width: '1500',
    height: '600',
    dataFormat: 'json',
    dataSource: {
        "chart": {
            "caption": "Chart with Student & Per",
            "xAxisname": "Name of Students",
            "yAxisName": "Percentage (In Rs.)",
            "numberSuffix": "%",
            "plotFillAlpha": "80",

            //Cosmetics
            "paletteColors": "#0075c2,#1aaf5d",
            "baseFontColor": "#333333",
            "baseFont": "Helvetica Neue,Arial",
            "captionFontSize": "14",
            "subcaptionFontSize": "14",
            "subcaptionFontBold": "0",
            "showBorder": "0",
            "bgColor": "#ffffff",
            "showShadow": "0",
            "canvasBgColor": "#ffffff",
            "canvasBorderAlpha": "0",
            "divlineAlpha": "100",
            "divlineColor": "#999999",
            "divlineThickness": "1",
            "divLineIsDashed": "1",
            "divLineDashLen": "1",
            "divLineGapLen": "1",
            "usePlotGradientColor": "0",
            "showplotborder": "0",
            "valueFontColor": "#ffffff",
            "placeValuesInside": "1",
            "showHoverEffect": "1",
            "rotateValues": "1",
            "showXAxisLine": "1",
            "xAxisLineThickness": "1",
            "xAxisLineColor": "#999999",
            "showAlternateHGridColor": "0",
            "legendBgAlpha": "0",
            "legendBorderAlpha": "0",
            "legendShadow": "0",
            "legendItemFontSize": "10",
            "legendItemFontColor": "#666666"
        },
        "categories": [{
            "category": [
			<?php 
			$conn=mysqli_connect("localhost","root",""); 
		    mysqli_select_db($conn,"dbschool");
			$q=mysqli_query($conn,"select Name_of_Students from $tn");
			while($r=mysqli_fetch_array($q))
			 
			  {
			?>
			{
                "label": "<?php echo $r[0]; ?>"
            },
			<?php 
			  }
			  ?>
			]
        }],
        "dataset": [{
            "seriesname": "Percentage",
            "data": [
			<?php 
			$con=mysqli_connect("localhost","root",""); 
		    mysqli_select_db($con,"dbschool");
			$q=mysqli_query($con,"select percent from $tn");
			while($r=mysqli_fetch_array($q))
			 
			{ ?>
				{
			"value": "<?php echo $r[0]; ?>"
			},
			<?php
			}
			?>
		]
        }],
       }
}
);
    fusioncharts.render();
    });
</script>

<?php
}
?>
</head>
<body>
<form>
<h3>Enter a Class Name/TableName</h3> <select name=tn>
<?php
$con=mysqli_connect("localhost","root",""); 
mysqli_select_db($con,"dbschool");
$q=mysqli_query($con,"show Tables");
while($tnm=mysqli_fetch_array($q))
{
	
echo "<option>";
echo "$tnm[0]</option>";
}
?>

</select>
<input type=submit value="View" Name=view>
</form>
<div id="chart-container"><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3></div>
</body>
</body>
</html>