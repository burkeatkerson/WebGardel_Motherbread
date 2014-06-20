<?php

class SBWebsite{
    protected $base_dir = null;
    protected $config_file = null;
    protected $config_data = null;

    protected $data = null;
    protected $section = null;

    function __construct(){
        // Setting our config location
        $this->base_dir = getcwd();
        $this->config_file = $this->base_dir . '/' . 'site_config.json';

        // Ensuring our site_config file exists
        if( !file_exists($this->config_file) )
            throw new Exception("The config file could not be found!");

        // Reading in the config file
        $this->_process_config_file();
        
    }

    function __destruct(){}

    // -------------- PUBLIC METHODS --------------
    function data($field){
        return $this->_pull_from_config($field, 'data');
    }

    function section($field){
        return $this->_pull_from_config($field, 'sections');
    }

    function content($field){
        return $this->_pull_from_config($field, 'content');
    }

    // -------------- PRIVATE METHODS--------------
    protected function _pull_from_config($field, $entity){
        $base = $this->config_data->$entity;

        if( !property_exists($base, $field) )
            throw new Exception("$field is not set in the $entity section of the site_config.json file");
        return $base->$field->value;
    }

    protected function _process_config_file(){
        $file_contents = file_get_contents($this->config_file);
        $file_contents = preg_replace("/\r(?!\n)/", '', $file_contents);
        $this->config_data = json_decode($file_contents);
    }
}
