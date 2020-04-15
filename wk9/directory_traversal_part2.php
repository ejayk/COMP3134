
<?php
    $path=basename(realpath($_GET['q']) ? $_GET['q'] : '.');

    if ( file_exists($path) && is_dir($path)) {
        print "<pre>";
        print_r(scandir($path));
        print "</pre>";
    }

    // File lookup - locate the dot
    if (strpos($_GET['q'],".") !== false){
            header("HTTP/1.0 403 Forbidden",true);
    }



?>