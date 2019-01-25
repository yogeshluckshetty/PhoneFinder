<?php
error_reporting(E_ERROR | E_PARSE);
$host = 'localhost';
$user = 'root';
$pass = '';
$db = mysqli_connect("$host","$user","$pass","second");
$errors=array();
if(isset($_POST['add']))
{
	$bra = mysqli_real_escape_string($db,$_POST['brand']);
	$cos = mysqli_real_escape_string($db,$_POST['cost']);
	$ca = mysqli_real_escape_string($db,$_POST['camera']);
	$ra = mysqli_real_escape_string($db,$_POST['ram']);
	$ro = mysqli_real_escape_string($db,$_POST['rom']);
	if(empty($bra))
		array_push($errors,"Brand not Enetered");
	if(empty($cos))
		array_push($errors,"Cost not Entered");
	if(empty($ca))
		array_push($errors," Camera not Entered");
	if(empty($ra))
		array_push($errors,"Ram Not Enetered");
	if(empty($ro))
		array_push($errors,"Rom not Entered");
	if(count($errors)==0)
	{
		$sql="INSERT INTO phones (Brand,Cost,Camera,Ram,Rom) 
		VALUES ('$bra','$cos','$ca','$ra','$ro')";
		mysqli_query($db,$sql);
		echo "Entered Succesfully";
	}
}
if(isset($_POST['apply']))
{
	//$sort="SELECT * FROM `phones` WHERE `Brand`=$_POST['brand1'] and `Cost`=$_POST['radio1'] and `Camera`="$_POST['cam1'] and `Ram`"$_POST['ram1']" and `Rom`"$_POST['rom1']";
	if(isset($_POST['brand1']))
	$br=$_POST['brand1'];
	if(isset($_POST['radio1']))
	$co=$_POST['radio1'];
	if(isset($_POST['cam1']))
	$ca=$_POST['cam1'];
	if(isset($_POST['ram1']))
	$ra=$_POST['ram1'];
	if(isset($_POST['rom1']))
	$ro=$_POST['rom1'];
	if(isset($_POST['and1']))
	$an=$_POST['and1'];
	if(isset($_POST['f1']))
	$f=$_POST['f1'];
	if(isset($_POST['scr1']))
	$scr=$_POST['scr1'];
	if(isset($_POST['sim1']))
	$si=$_POST['sim1'];
	$sort="SELECT * FROM `phones` WHERE `Brand` LIKE '%$br%' and `Cost` $co and `Camera` $ca and `Ram` $ra and `Rom` $ro and `Android` LIKE '%$an%' and `FrontCamera` $f and `ScreenSize` $scr and `SimSlots` LIKE '%$si%' ";
	$qry=mysqli_query($db,$sort);
	if(!($row=mysqli_fetch_array($qry)))
		echo "No Entries Found ";
	else
	{
	echo "<table border=1 cellpadding=1 cellspacing=1>
                <tr>
                    <th> Brand </th>
                    <th> Cost </th>
                    <th> Camera </th>
                	<th> Ram </th>
                	<th> Rom </th>
                	<th> Android </th>
                    <th> FrontCamera </th>
                	<th> ScreenSize </th>
                	<th> SimSlots </th>
                </tr>";
    while($row=mysqli_fetch_array($qry)){
    	 echo "<tr>";
         echo "<td>".$row['Brand']."</td>";
         echo "<td>".$row['Cost']."</td>";
         echo "<td>".$row['Camera']."</td>";
         echo "<td>".$row['Ram']."</td>";
         echo "<td>".$row['Rom']."</td>";
         echo "<td>".$row['Android']."</td>";
         echo "<td>".$row['FrontCamera']."</td>";
         echo "<td>".$row['ScreenSize']."</td>";
         echo "<td>".$row['SimSlots']."</td>";            
         echo "</tr>";       
    }
    echo "</table>";
 	}
 }
?>
