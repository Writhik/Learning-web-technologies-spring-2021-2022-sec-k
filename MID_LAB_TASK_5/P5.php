<?php

    $Degree="";
    $Error="";

    if(isset($_REQUEST['Submit'])){
        if($_REQUEST['Degree']==null){
            $Error="Invalid";
        }
        else{
            $Error="Valid";
            $Degree=$_REQUEST['Degree'];
        }
    }

?>
