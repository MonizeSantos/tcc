<?php

//echo '<pre>';
//print_r($_POST);
//echo '</pre>';

include('formequip-server.php');

listar( $_POST );

header( 'Location: ../formequipe-listar.php' );

?>
