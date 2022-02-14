<?php

    $Gender="";
    $Error="";

    if(isset($_REQUEST['Submit'])){
        if($_REQUEST['Gender']==null){
            $Error="Invalid";
        }
        else{
            $Error="Valid";
            $Gender=$_REQUEST['Gender'];
        }
    }

?>
