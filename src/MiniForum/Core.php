<?php

namespace Vladarta\MiniForum;


class Core
{
    /*
     * Application
     */
    private $app = false;
    
    /*
     * Configuration array
     */
    private $config = array();
    
    
    public function __construct() {
        if(!$this->app){
            $this->app = new Core();
        }        
        return $this->app;
    }

    
    /*
     * Main application run script
     * @param $config configuration array with db access
     */  
    public function run($config)
    {
        $this->config = $config;
        var_dump($config)
    }
}