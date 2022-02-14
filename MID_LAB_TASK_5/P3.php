<?php

    $DoB="";
    $Error="";

    if(isset($_REQUEST['Submit'])){
        if($_REQUEST['DoB']==null){
            $Error="Invalid";
        }
        else{
            $Error="Valid";
            $DoB=$_REQUEST['DoB'];
        }
    }

?>
