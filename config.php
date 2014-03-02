<?php
    define('FILE_CACHE_DIRECTORY', dirname(__FILE__) . '/img-cache');
    
    define('RANDOM_IMAGES_FOLDER', dirname(__FILE__) . '/img/default/generic/');
    
    define('NOT_FOUND_IMAGE', DEFAULT_IMAGE);
    define('NOT_FOUND_IMAGES_FOLDER', RANDOM_IMAGES_FOLDER);
    
    define('ERROR_IMAGE', DEFAULT_IMAGE);
    define('ERROR_IMAGES_FOLDER', RANDOM_IMAGES_FOLDER);
    
    define('ALLOW_EXTERNAL', true);
    
    /**
    * NOTE: ABUSE ALERT
    * 
    *   THIS IS A HUGE SECURITY ISSUE AND SHOULD BE LATER CHANGED TO FALSE.
    */
    define('ALLOW_ALL_EXTERNAL_SITES', true);
    
    define('DEBUG_ON', true);
?>
