<?php
    require_once 'InfoUtil.php';
    $pagetitle = $pages[$_GET['page']];
    $subpagetitle = $subpages[$_GET['subpage']];
?>
<html>
    <head>
        <title><?php echo $pagetitle; ?>&nbsp;=&gt;&nbsp;<?php echo $subpagetitle; ?></title>
    </head>
    <body style="background-color:#464F56;padding:10px;">
        <center>
            <table border="0" cellspacing="0" cellpadding="0" width="95%">
                <?php
                    foreach($sections[$_GET['page']][$_GET['subpage']] as $key => $section)
                    {
                        echo displayPageSection($_GET['page'], $_GET['subpage'], $key);
                    }
                ?>
            </table>
        </center>
    </body>
</html>