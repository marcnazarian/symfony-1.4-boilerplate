<?php

class ForumTable {
    
    private function __construct() { }
    
    static private $instance;
    
    public function getInstance() {
        if ( ! $this->instance) {
            $this->instance = new ForumTable();
        }
        return $this->instance;
    }
    
    public function getAllMessages() {
        return array('message 1', 'message 2', 'message 3');
    }
    
}

?>
