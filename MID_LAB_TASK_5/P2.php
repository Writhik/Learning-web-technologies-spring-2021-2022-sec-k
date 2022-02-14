<?php

    $Email="";
    $Error="";

    if(isset($_REQUEST['Submit'])){
        if($_REQUEST['Email']==null){
            $Error="Invalid";
        }
        else{
            $Error="Valid";
            $Email=$_REQUEST['Email'];
        }
    }

?>
