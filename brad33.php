<?php
$id = "A123456789";
if (preg_match('/^[A-Z][1-2][0-9]{8}$/',$id)) {
    echo 'ok';
} else {
    echo 'xx';
}


?>