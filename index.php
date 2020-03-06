<?php
$page = $_SERVER['PHP_SELF'];
$sec = "20";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>UAPA</title>
  <meta charset="utf-8">
   <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
#page-header-wrapper {
    background: #09183a;
    width: 100%;
    z-index: 2;
}
#above-header {
    border-bottom: 1px solid #fff;
    height: 25px;
    padding-top: 5px;
    padding-bottom: 5px;
    margin-bottom: 10px;
    background-color: #FE9930;
}



/* STRUCTURE */

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column; 
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
}

#formContent {
  -webkit-border-radius: 10px 10px 10px 10px;
  border-radius: 10px 10px 10px 10px;
  background: #fff;
  padding: 30px;
  width: 90%;
  max-width: 450px;
  position: relative;
  padding: 0px;
  -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  text-align: center;
}

#formFooter {
  background-color: #f6f6f6;
  border-top: 1px solid #dce8f1;
  padding: 25px;
  text-align: center;
  -webkit-border-radius: 0 0 10px 10px;
  border-radius: 0 0 10px 10px;
}



/* TABS */

h2.inactive {
  color: #cccccc;
}

h2.active {
  color: #0d0d0d;
  border-bottom: 2px solid #5fbae9;
}



/* FORM TYPOGRAPHY*/

input[type=button], input[type=submit], input[type=reset]  {
  background-color: #56baed;
  border: none;
  color: white;
  padding: 15px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
  background-color: #39ace7;
}

input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
  -moz-transform: scale(0.95);
  -webkit-transform: scale(0.95);
  -o-transform: scale(0.95);
  -ms-transform: scale(0.95);
  transform: scale(0.95);
}

input[type=text] {
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}

input[type=text]:focus {
  background-color: #fff;
  border-bottom: 2px solid #5fbae9;
}

input[type=text]:placeholder {
  color: #cccccc;
}


.h1claass{text-align: center;
    padding-top: 30px;}



  </style>
</head>
<body>

    <header id="page-header-wrapper">
        <div id="above-header">
            <div class="clearfix container userhead" id="yui_3_17_2_1_1581126265853_139">
                <div class="pull-left">
                    <ul class="usermenu2 nav navbar-nav navbar-right"></ul>            </div>
    
                <div class="headermenu row">
    </div>
        </div>
    </div>
    <div id="page-header" class="clearfix container">
    
    
    <div id="titlecontainer" class="pull-left"><div id="logocontainer"><a href="http://servicios.uapa.edu.do" id="yui_3_17_2_1_1581126265853_140">
        <img src="http://servicios.uapa.edu.do/pluginfile.php/1/theme_adaptable/logo/1543864334/logo-blanco.png" alt="logo" id="logo"></a></div></div>
            <div id="course-header">
                        </div>
        </div>
    
    </header>
<h1 class="h1claass">Sistema para la localizacion de Aulas</h1>

<div class="container">

<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$strKeyword = null;

	if(isset($_POST["txtKeyword"]))
	{
		$strKeyword = $_POST["txtKeyword"];
	}
?>
    <div class="wrapper fadeInDown">
        <div id="formContent">
        <form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
              Matr&iacute;cula 
              <input name="txtKeyword" placeholder="Ingrese la matrícula 00-0000" type="text" id="txtKeyword" value="<?php echo $strKeyword;?>">
              <input type="submit" class="fadeIn fourth" value="Search"></th>
        </form>
        </div>
    </div>
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
<table class="table">
  <thead class="thead-dark">
  <tr>
    <th scope="col">C&oacute;digo</th>
    <th scope="col">Secci&oacute;n</th>
    <th scope="col">Nombre </th>
    <th scope="col">Aula</th>
    <th scope="col">Dia </th>
    <th scope="col">Hora inicio </th>  
    <th scope="col">Hora Final </th>  
    <th scope="col">Fecha</th>    
    <th scope="col">Facilitador </th>
    <th scope="col">Ver  </th>
    <th scope="col">Qr </th>
  </tr>
  </thead>
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
if(isset($_POST['txtKeyword'])){
?>
<tbody>
  <tr>
    <td scope="row"><?php echo $result["Codigo"];?></div></td>
    <td><?php echo $result["Seccion"];?></td>
    <td><?php echo $result["Nombre"];?></td>
    <td><?php echo $result["Aula"];?></td>    
    <td><?php echo $result["Dia"];?></td>
    <td><?php echo $result["Hora_Inicio"];?></td>
    <td><?php echo $result["Hora_Final"];?></td>
    <td><?php echo $result["Fecha_inicion"];?></td>
    <td><?php echo $result["Facilitador"];?></td>  
    <td align="right"><a href='<?php echo $result["mapa_link"];?>'>Mapa</a></td>
    <td align="right"><img src='<?php echo $result["mapa"];?>' alt="Uapa" height="100" width="100"></td>
  </tr>
  </tbody>
<?php
}
}
?>
</table>

<?php
mysqli_close($conn);
?>


          
         
</div>



 <script>
function openQRCamera(node) {
  var reader = new FileReader();
  reader.onload = function() {
    node.value = "";
    qrcode.callback = function(res) {
      if(res instanceof Error) {
        alert("No QR code found. Please make sure the QR code is within the camera's frame and try again.");
      } else {
        node.parentNode.previousElementSibling.value = res;
      }
    };
    qrcode.decode(reader.result);
  };
  reader.readAsDataURL(node.files[0]);
}
          
          </script>