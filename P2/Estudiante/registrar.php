<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['ci']) >= 1 && strlen($_POST['usuario']) >= 1 && strlen($_POST['password']) >= 1) {
	    $cii = trim($_POST['ci']);
	    $usuario = trim($_POST['usuario']);
		$password = trim($_POST['password']);	    
	    
		$sql ="INSERT INTO usuario (ci, usuario, passwordu) ";
			$sql.="VALUES ('$cii','$usuario','$password')";    
		
		$res = mysqli_query($conn, $sql);
		if($res){
			?>
			<h3 class = "ok">Se ha registrado satisfactoriamente!</h3>
			<?php			
		} else {
			?>
			<h3 class = "bad">Error de registro!</h3>
			<?php
		}
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>