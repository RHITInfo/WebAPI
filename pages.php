<?php
    require_once 'InfoUtil.php';
    $output = 
'<?xml version="1.0"?>
<pages>';
    foreach($pages as $key => $page)
    {
        $output .= '
    <page>
        <index>'.$key.'</index>
        <title>'.htmlentities($page).'</title>
        <url>http://dev.rose-hulman.edu/RHITInfoTest/subpages.php?page='.$key.'</url>
    </page>';
    }
    $output .= '
</pages>';
    header('Content-Type: application/xml');
    echo $output;
?>