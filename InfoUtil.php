<?php
    $pages = array('Page 1', 'Page 2', 'Page 3', 'Page 4', 'Page 5', 'Page 6', 'Page 7', 'Page 8', 'Page 9', 'Page 10');
    $subpages = array('Subpage 1', 'Subpage 2', 'Subpage 3', 'Subpage 4', 'Subpage 5', 'Subpage 6', 'Subpage 7', 'Subpage 8', 'Subpage 9', 'Subpage 10');
    $sections = array(array('Section 1', 'Section 1 content <b>bold text</b> <i>italic text</i> <u>underlined text</u> <span style="color:#FF0000">red text</span>.'), array('Section 2', 'Section 2 content <b>bold text</b> <i>italic text</i> <u>underlined text</u> <span style="color:#FF0000">red text</span>.'), array('Section 3', 'Section 3 content <b>bold text</b> <i>italic text</i> <u>underlined text</u> <span style="color:#FF0000">red text</span>.'), array('Section 4', 'Section 4 content <b>bold text</b> <i>italic text</i> <u>underlined text</u> <span style="color:#FF0000">red text</span>.'), array('Section 5', 'Section 5 content <b>bold text</b> <i>italic text</i> <u>underlined text</u> <span style="color:#FF0000">red text</span>.'));
    
    function displayPageSection($page, $subpage, $section)
    {
        global $pages;
        global $subpages;
        global $sections;
        $rval = '
            <tr>
                <td style="font-size:larger;font-weight:bold;color:#FFFFFF;background-color:#9F0000;padding:5px;">'.$sections[$section][0].'</td>
            </tr>
            <tr>
                <td style="color:#000000;background-color:#FFFFFF;padding:5px;">'.$sections[$section][1].'</td>
            </tr>
            <tr>
                <td style="background-color:transparent;padding:5px;">&nbsp;</td>
            </tr>';
        return $rval;
    }
?>