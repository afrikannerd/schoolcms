<?php

/**
 * Description of autoloader
 * Dynamically loads php class files on demand
 * Created on : Jun 16, 2018, 9:56:01 AM
 * @author afrikannerd <https://github.com/afrikannerd>
 * @version "0.1"
 */

spl_autoload_register(function($class)
{
    $with_nmsp = explode("\\", $class);
    if ( count($with_nmsp) > 1)
    {
        
        $class = implode('/', $with_nmsp);
        if ( file_exists( '../'.$class.'.php' ) ){
            include_once '../'.$class.'.php';
        }
        return;
    }
    /*
    if ( file_exists( core.DS.$class.'.php' ) ){
        include_once core.DS.$class.'.php';
    }elseif (file_exists(app['con'].DS.$class.'.php')) {
        include_once app['con'].DS.$class.'.php';
    }elseif (file_exists(app['mod'].DS.$class.'.php')) {
        include_once app['mod'].DS.$class.'.php';
    }else{
        echo 'file '.$class.'.php doesn\'t exist';
    }
     * 
     */
}
);