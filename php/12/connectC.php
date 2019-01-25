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
	$br1=$_POST['brand1'];
	if(isset($_POST['brand2']))
	$br2=$_POST['brand2'];
	if(isset($_POST['brand3']))
	$br3=$_POST['brand3'];
	if(isset($_POST['brand4']))
	$br4=$_POST['brand4'];
	if(isset($_POST['brand5']))
	$br5=$_POST['brand5'];
	if(isset($_POST['cost1']))
	$co1=$_POST['cost1'];
	if(isset($_POST['cost2']))
	$co2=$_POST['cost2'];
	if(isset($_POST['cost3']))
	$co3=$_POST['cost3'];
	if(isset($_POST['cost4']))
	$co4=$_POST['cost4'];
	if(isset($_POST['cam1']))
	$ca1=$_POST['cam1'];
	if(isset($_POST['cam2']))
	$ca2=$_POST['cam2'];
	if(isset($_POST['cam3']))
	$ca3=$_POST['cam3'];
	if(isset($_POST['cam4']))
	$ca4=$_POST['cam4'];
	if(isset($_POST['ram1']))
	$ra1=$_POST['ram1'];
	if(isset($_POST['ram2']))
	$ra2=$_POST['ram2'];
	if(isset($_POST['ram3']))
	$ra3=$_POST['ram3'];
	if(isset($_POST['ram4']))
	$ra4=$_POST['ram4'];
	if(isset($_POST['rom1']))
	$ro1=$_POST['rom1'];
	if(isset($_POST['rom2']))
	$ro2=$_POST['rom2'];
	if(isset($_POST['rom3']))
	$ro3=$_POST['rom3'];
	if(isset($_POST['rom4']))
	$ro4=$_POST['rom4'];
	$sort="SELECT * FROM `phones` WHERE `Brand` LIKE '%$br1%' OR `Brand` LIKE '%$br2%' OR `Brand` LIKE '%$br3%' OR `Brand` LIKE '%$br4%' OR `Brand` LIKE '%$br5%' and `Cost` $co1 OR `Cost` $co2 OR `Cost` $co3 OR `Cost` $co4 and `Camera` $ca1 OR `Camera` $ca2 OR `Camera` $ca3 OR `Camera` $ca4 and `Ram` $ra1 OR `Ram` $ra2 OR `Ram` $ra3 OR `Ram` $ra4 and `Rom` $ro1 OR `Rom` $ro2 OR `Rom` $ro3 OR `Rom` $ro4";
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
                </tr>";
    while($row=mysqli_fetch_array($qry)){
    	 echo "<tr>";
         echo "<td>".$row['Brand']."</td>";
         echo "<td>".$row['Cost']."</td>";
         echo "<td>".$row['Camera']."</td>";
         echo "<td>".$row['Ram']."</td>";
         echo "<td>".$row['Rom']."</td>";           
         echo "</tr>";       
    }
    echo "</table>";
 	}
 }
?>
