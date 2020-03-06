
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$strKeyword = null;

	if(isset($_POST["txtKeyword"]))
	{
		$strKeyword = $_POST["txtKeyword"];
	}
?>
<form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
  <table width="599" border="1">
    <tr>
      <th>Matr&iacute;cula 
      <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword;?>">
      <input type="submit" value="Search"></th>
    </tr>
  </table>
</form>

<?php

   $serverName = "localhost";
   $userName = "root";
   $userPassword = "usbw";
   $dbName = "uapa";

   $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	
 // $sql = "SELECT * FROM customer WHERE Name LIKE '%".$strKeyword."%' ";
$sql = "SELECT * FROM cotrol_acad INNER JOIN inscripciones ON cotrol_acad.Codigo = inscripciones.Codigo WHERE inscripciones.Matricula LIKE '%".$strKeyword."%' ";
   
   $query = mysqli_query($conn,$sql);

?>
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">C&oacute;digo </div></th>
    <th width="98"> <div align="center">Secci&oacute;n</div></th>
    <th width="198"> <div align="center">Nombre </div></th>
    <th width="97"> <div align="center">Aula</div></th>
    <th width="59"> <div align="center">Dia </div></th>
    <th width="71"> <div align="center">Facilitador </div></th>
    <th width="71"> <div align="center">Ir </div></th>
    <th width="71"> <div align="center">Qr </div></th>
  </tr>
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
  <tr>
    <td><div align="center"><?php echo $result["Codigo"];?></div></td>
    <td><?php echo $result["Nombre"];?></td>
    <td><?php echo $result["Aula"];?></td>
    <td><div align="center"><?php echo $result["Dia"];?></div></td>
    <td align="right"><?php echo $result["Hora_Final"];?></td>
    <td align="right"><?php echo $result["Facilitador"];?></td>
    <td align="right"><a href='<?php echo $result["mapa"];?>'>Ver mapa</a></td>
    <td align="right"><img src='<?php echo $result["mapa"];?>' alt="Uapa" height="100" width="100"></td>
    
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>