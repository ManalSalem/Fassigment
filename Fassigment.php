<?php
$recText = $_GET['text'];

if($recText % 2 ==0)
{
    echo "It is an even number";
}
else{
    echo "It is an odd number";
}