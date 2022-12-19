<?php

// Non-web tree base directory.
define('NON_WEB_BASE_DIR', 'C:/4270/');
define('APP_NON_WEB_BASE_DIR', NON_WEB_BASE_DIR . 'dbSecure/');
include_once(APP_NON_WEB_BASE_DIR . 'includes/dbSecureIncludes.php');

// Obtain a reference to the database connection.
$db = DBAccess::getInstance()->getConnection();

echo '<p>Returned from DBAccess - connection established.</p>';
if ($db != null) {
   $db = null;
    echo '<p>Connection closed</p>';
}



