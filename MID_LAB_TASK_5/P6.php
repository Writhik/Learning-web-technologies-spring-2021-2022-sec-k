<?php

    $BG="";
    $Error="";

    if(isset($_REQUEST['Submit'])){
        if($_REQUEST['BG']==null){
            $Error="Invalid";
        }
        else{
            $Error="Valid";
            $BG=$_REQUEST['BG'];
        }
    }

?>
