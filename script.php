<?php

if( isset($_GET['status']) )
{
    if($_GET['status'] == 'on')
    {
        echo ("LED on");

    }
    elseif($_GET['status'] == 'off')
    {
        echo ("LED off");

    }
}

?>