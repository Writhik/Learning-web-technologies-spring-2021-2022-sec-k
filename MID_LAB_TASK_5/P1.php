<?php

    $Name="";
    $Error="";

    if(isset($_REQUEST['Submit'])){
        if($_REQUEST['Name']==null){
            $Error="Invalid";
        }
        else{
            $Error="Valid";
            $Name=$_REQUEST['Name'];
        }
    }

?>
