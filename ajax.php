<?php

#Sets up the output buffer.
require_once 'includes/output-buffer.php';

#Sets the page up.
require_once 'includes/api-autoloader.php';
require_once 'includes/database-configuration.php';

#Loads in the form process file.
require_once $_REQUEST['ajax'];

ob_end_flush();
