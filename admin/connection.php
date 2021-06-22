<?php

    $con=mysqli_connect('localhost','root','','frie_friends_enterprises');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>