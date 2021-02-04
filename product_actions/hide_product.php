<?php

require_once "../CProducts.php";

if (! isset($_POST["id"])) {
    echo false;
    exit;
}

\CProducts\CProducts::hide($_POST["id"]);
echo true;