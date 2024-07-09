<?php
require ('index.php');
class bar
{
    use Bank;
}

$object = new bar;
$object->deposit("500");
$object->withdraw("600");
?>