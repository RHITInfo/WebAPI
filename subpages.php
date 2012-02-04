<?php
    require_once 'InfoUtil.php';
    $output = 
'<?xml version="1.0"?>
<subpages>';
    foreach($subpages as $key => $subpage)
    {
        $output .= '
    <subpage>
        <index>'.$key.'</index>
        <title>'.htmlentities($subpage).'</title>
        <url>http://dev.rose-hulman.edu/RHITInfoTest/display_page.php?page='.$_GET['page'].'&amp;subpage='.$key.'</url>
    </subpage>';
    }
    $output .= '
</subpages>';
    header('Content-Type: application/xml');
    echo $output;
?>