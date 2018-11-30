<?php

$p_id = $_GET['presentation_id'];
function __autoload($classname)
{
    include "classes/$classname.php";
}
$presentation = new Presentation;
$delete = $presentation->deletePresentationById($p_id);
if ($delete) {
    header ("Location: index.php");
}
?>
