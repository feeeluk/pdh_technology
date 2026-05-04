<?php
    
    //CONFIG
    include($_SERVER['DOCUMENT_ROOT'] . "/assets/config/config.php");      
        
    // PAGE META
    $subTitle = "Release Notes";
    $metaDescription = "Relase Notes";
    $metaKeywords ="Release Notes Information";

?>

<?php include($root."/assets/includes/layout/page_open.php"); ?>
        
    <div class="box--WithPadding item text">

        <h1 class="item--Title">
            Release Notes
        </h1>

        <ul>
            <li>
                <a href="/assets/release_notes/historical/sergeant_parkhurst.pdf" target="_blank">
                    Version: 1.00.003 - Released on 4th May 2026
                </a>
            </li>
            <li>
                <a href="/assets/release_notes/historical/private_baldrick.pdf" target="_blank">
                    Version: 1.00.002 - Released on 19th April 2026
                </a>
            </li>
            <li>
                <a href="/assets/release_notes/historical/red_barron.pdf" target="_blank">
                    Version: 1.00.001 - Released on 5th April 2026
                </a>
            </li>
        </ul>
            
        </p>

    </div>

<?php include($root."/assets/includes/layout/page_close.php"); ?>