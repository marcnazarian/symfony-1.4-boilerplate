<?php

class Forum {
    
    public function getForumMessageTable() {
        return ForumMessageTable::getInstance();
    }
    
    public function getMessages() {
        return $this->getForumMessageTable()->getAllMessages();
    }
    
}
