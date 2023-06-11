<?php 
$servidor= "bbdd-alisal.c3hcthrc3e6k.us-east-1.rds.amazonaws.com";
$usuario= "admin";
$password= "Melviky949";
$bd= "iesalisal";
$conecta= mysqli_connect ($servidor,$usuario,$password);
if ($conecta->connect_error){
    die("error al conectar".$conect->connect_error)
}
else{echo "cnoexion exitosa"}


?>
