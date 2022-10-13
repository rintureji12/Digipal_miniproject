<?php
    $dob='1981-10-07';
    $diff = (date('Y') - date('Y',strtotime($dob)));
    echo $diff;
?>
